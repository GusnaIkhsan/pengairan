$("#btn-search-announcement").click(function() {
    if($("#input-search-announcement").val() != ""){
        const targetUrl = new URL(base_url + 'all-announcement');
        targetUrl.searchParams.append("search", $("#input-search-announcement").val().toLowerCase());
        window.location.assign(targetUrl.href)
    }
});
