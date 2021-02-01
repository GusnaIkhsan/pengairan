$("#btn-search-news").click(function() {
    if($("#input-search-news").val() != ""){
        const targetUrl = new URL(base_url + 'all-news');
        targetUrl.searchParams.append("search", $("#input-search-news").val().toLowerCase());
        window.location.assign(targetUrl.href)
    }
});
