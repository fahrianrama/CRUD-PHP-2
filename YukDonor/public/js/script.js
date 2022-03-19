$(function(){
    $('.tampilModalUbahDarah').on('click', function(){

    const goldar = $(this).data('goldar');
    $.ajax({
        url: 'https://localhost/YukDonor/public/management/getdatagol',
        data: {goldar : goldar},
        method: 'POST',
        dataType: 'json',
        success: function(data){
            $('#goldar').val(data.goldar);
            $('#stok').val(data.stok);
        }
    })

    });
    $('.tampilModalUbahJadwal').on('click', function(){

        const id = $(this).data('id');
        $.ajax({
            url: 'https://localhost/YukDonor/public/management/getdatajadwal',
            data: {id : id},
            method: 'POST',
            dataType: 'json',
            success: function(data){
                $('#nama2').val(data.nama);
                $('#lokasi2').val(data.lokasi);
                $('#tanggal2').val(data.tanggal);
                $('#identitas').val(data.nama);
            }
        })
    
        });
    $('.tampilModalUbahPendonor').on('click', function(){
         console.log("OKE");
         const id = $(this).data('id');
         $.ajax({
            url: 'https://localhost/YukDonor/public/management/getdatadonor',
            data: {id : id},
            method: 'POST',
            dataType: 'json',
            success: function(data){
                  $('#nama3').val(data.nama);
                  $('#kelamin2').val(data.jk);
                  $('#alamat2').val(data.alamat);
                  $('#noHP2').val(data.noHP);
                  $('#goldar2').val(data.goldar);
                  $('#usia2').val(data.usia);
                  $('#identitas2').val(data.nama);

              }
        })
        
        });
    
    
});