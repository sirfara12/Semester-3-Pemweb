$(document).ready(function() {
    $("#upload-form").submit(function(e) {
        e.preventDefault();

        var formData = new FormData(this);

        // Mengecek apakah ada file yang dipilih
        var files = $('#files')[0].files;
        if(files.length === 0){
            $('#status').html('Silakan pilih file gambar untuk diunggah.');
            return;
        }

        // Validasi jumlah file (opsional, misalnya maksimal 5 file)
        var max_files = 5;
        if(files.length > max_files){
            $('#status').html('Anda dapat mengunggah maksimal ' + max_files + ' file.');
            return;
        }

        $.ajax({
            type: 'POST',
            url: 'upload_ajax.php',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            beforeSend: function(){
                $('#status').html('Sedang mengunggah...');
            },
            success: function(response) {
                $('#status').html(response);
            },
            error: function() {
                $('#status').html('Terjadi kesalahan saat mengunggah file.');
            }
        });
    });
});
