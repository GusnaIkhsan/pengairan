$("#btn-search-agenda").click(function() {
    if($("#input-search-agenda").val() != ""){
        const targetUrl = new URL(base_url + 'all-agenda');
        targetUrl.searchParams.append("search", $("#input-search-agenda").val().toLowerCase());
        window.location.assign(targetUrl.href)
    }
});
