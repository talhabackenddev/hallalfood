$(window).on("load", function () {
    let image_data_url;
    let camera_button = document.querySelector("#start-camera");
    let video = document.querySelector("#video");
    let click_button = document.querySelector("#click-photo");
    let canvas = document.querySelector("#canvas");

    camera_button.addEventListener("click", async function () {
        let stream = await navigator.mediaDevices.getUserMedia({
            video: true,
            audio: false,
        });
        video.srcObject = stream;
    });

    click_button.addEventListener("click", function () {
        canvas
            .getContext("2d")
            .drawImage(video, 0, 0, canvas.width, canvas.height);

        canvas.toBlob(function (blob) {
            start(blob);
        });

        // image_data_url = canvas.toDataURL("image/jpeg");

        // data url of the image
    });

    // const imageUpload = document.getElementById("imageUpload");

    async function start(file) {
        Promise.all([
            faceapi.nets.faceRecognitionNet.loadFromUri("/assets/models"),
            faceapi.nets.faceLandmark68Net.loadFromUri("/assets/models"),
            faceapi.nets.ssdMobilenetv1.loadFromUri("/assets/models"),
        ]).then(async function () {
            const container = document.createElement("div");
            container.style.position = "relative";
            document.body.append(container);
            const labeledFaceDescriptors = await loadLabeledImages();
            const faceMatcher = new faceapi.FaceMatcher(
                labeledFaceDescriptors,
                0.6
            );

            let image;
            let canvas;
            document.body.append("Loaded");

            // imageUpload.addEventListener("change", async () => {
            if (image) image.remove();
            if (canvas) canvas.remove();
            image = await faceapi.bufferToImage(file);
            container.append(image);
            canvas = faceapi.createCanvasFromMedia(image);
            container.append(canvas);
            const displaySize = { width: image.width, height: image.height };
            faceapi.matchDimensions(canvas, displaySize);
            const detections = await faceapi
                .detectAllFaces(image)
                .withFaceLandmarks()
                .withFaceDescriptors();
            const resizedDetections = faceapi.resizeResults(
                detections,
                displaySize
            );
            const results = resizedDetections.map((d) =>
                faceMatcher.findBestMatch(d.descriptor)
            );
            results.forEach((result, i) => {
                const box = resizedDetections[i].detection.box;
                const drawBox = new faceapi.draw.DrawBox(box, {
                    label: result.toString(),
                });
                drawBox.draw(canvas);
            });
        });

        // });
    }

    function loadLabeledImages() {
        const labels = [
            "Black Widow",
            "Captain America",
            "Captain Marvel",
            "Hawkeye",
            "Jim Rhodes",
            "Thor",
            "Tony Stark",
            "Arsalan",
        ];
        return Promise.all(
            labels.map(async (label) => {
                const descriptions = [];
                for (let i = 1; i <= 2; i++) {
                    const img = await faceapi.fetchImage(
                        `/assets/labeled_images/${label}/${i}.jpg`
                    );
                    const detections = await faceapi
                        .detectSingleFace(img)
                        .withFaceLandmarks()
                        .withFaceDescriptor();
                    descriptions.push(detections.descriptor);
                }

                return new faceapi.LabeledFaceDescriptors(label, descriptions);
            })
        );
    }
});
