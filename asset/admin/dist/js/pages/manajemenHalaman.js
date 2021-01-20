$("#btn-slug").click(function() {
    var generatedSlug = $('#input-name').val().replace(/[^a-zA-Z0-9 ]/gi,'');
    $('#input-slug').val(generatedSlug.toLowerCase().replace(/ /g,'-'));
});