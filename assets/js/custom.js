// const wrapper = document.getElementById("signature-pad");
const ocr = wrapper.querySelector("[data-action=ocr]");

ocr.addEventListener("click", () => {
    if (signaturePad.isEmpty()) {
        alert("Please provide a signature first.");
    } else {
        const dataURL = signaturePad.toDataURL();
        //   download(dataURL, "signature.png");
        var file_uri = dataURLtoFile(dataURL, 'roy.jpeg');
        var fd = new FormData();
        fd.append('file', file_uri);

        $.ajax({
            type: 'POST',
            url: '//kaikei.dev.jacos.jp/backend/api/ocr',
            data: fd,
            contentType: false,
            processData: false,
            // dataType: 'jsonp',
            success: (response) => {
                console.log(response);
               
            },
            error: function (response) {
                console.log(response);
            }
        });
    }
});


function dataURLtoFile(dataurl, filename) {
    var arr = dataurl.split(','),
        mime = arr[0].match(/:(.*?);/)[1],
        bstr = atob(arr[1]),
        n = bstr.length,
        u8arr = new Uint8Array(n);

    while (n--) {
        u8arr[n] = bstr.charCodeAt(n);
    }

    return new File([u8arr], filename, {
        type: mime
    });
}