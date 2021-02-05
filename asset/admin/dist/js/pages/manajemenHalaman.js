$("#btn-slug").click(function() {
    var generatedSlug = $('#input-name').val().replace(/[^a-zA-Z0-9 ]/gi,'');
    $('#input-slug').val(generatedSlug.toLowerCase().replace(/ /g,'-'));
});

if(tipeHalaman == 0){
    $("#radio-dinamis").prop('checked', true);
    $("#prefix-link").show();
    $("#btn-slug").show();
    $("#content-halaman").show();
} else {
    $("#radio-statis").prop('checked', true);
    $("#prefix-link").hide();
    $("#btn-slug").hide();
    $("#content-halaman").hide();
}

$("#radio-statis").click(function() {
    $("#prefix-link").hide();
    $("#btn-slug").hide();
    $("#content-halaman").hide();
});

$("#radio-dinamis").click(function() {
    $("#prefix-link").show();
    $("#btn-slug").show();
    $("#content-halaman").show();
});