if (jQuery("textarea.tinyMCI").length) {
  if(typeof Quill !== typeof undefined) {
    const quill = new Quill('textarea.tinyMCI', {
      theme: 'snow'
    });
  }
}
const inputs_date = document.querySelectorAll('.input_date')
Array.from(inputs_date, (el) => {
  if(typeof flatpickr !== typeof undefined) {
    flatpickr(el, {
      dateFormat: "Y-m-d",
      minDate:el.min,
      maxDate:el.max
    })
  }
}) 

document.querySelectorAll('.input--poster').forEach(e=>{
    let id = e.id,
    roundImage = document.querySelector(`#${id} > div > div.poster-body > div > div.croops-content > img`),
    roundButton = document.querySelector(`#${id} > div > div.poster-body > div > div.croops-buttons.mt-2 > button`),
    roundResult = document.querySelector(`#${id} > div > div.poster-footer.mt-3.mb-2 > div > div > div.croops-content`),
    roundFile = document.querySelector(`#${id} > div > div.poster-header > input[type=file]`),
    roundInput = document.querySelector(`#${id} > div > div.poster-header > input[type=hidden]`),
    roundcroppable = false;
    
    if(roundImage !== null) {
        roundCropper = new Cropper(roundImage, {
            aspectRatio: 1,
            viewMode: 1,
            ready: function () {
                roundcroppable = true;
            },
        });
    
        roundButton.onclick = function () {
            let croppedCanvas;
            let roundedCanvas;
            let roundedImage;
    
            if (!roundcroppable) {
                return;
            }
    
            // Crop
            croppedCanvas = roundCropper.getCroppedCanvas();
    
            // Round
            roundedCanvas = getRoundedCanvas(croppedCanvas);
    
            // Show
            roundedImage = document.createElement('img');
            roundInput.value = roundedImage.src = roundedCanvas.toDataURL();
            roundedImage.classList = "img-fluid";
            roundResult.innerHTML = '';
            roundResult.appendChild(roundedImage);
        };

        roundFile.onchange = function(){
            roundImage.src = URL.createObjectURL(roundFile.files[0]);
            roundCropper.destroy()
            roundCropper = new Cropper(roundImage, {
                aspectRatio: 1,
                viewMode: 1,
                ready: function () {
                    roundcroppable = true;
                },
            });
        }
    }
})

function getRoundedCanvas(sourceCanvas) {
    const roundcanvas = document.createElement('canvas');
    const context = roundcanvas.getContext('2d');
    let width = sourceCanvas.width;
    let height = sourceCanvas.height;

    roundcanvas.width = width;
    roundcanvas.height = height;
    context.imageSmoothingEnabled = true;
    context.drawImage(sourceCanvas, 0, 0, width, height);
    context.globalCompositeOperation = 'destination-in';
    context.beginPath();
    context.arc(width / 2, height / 2, Math.min(width, height) / 2, 0, 2 * Math.PI, true);
    context.fill();
    return roundcanvas;
}