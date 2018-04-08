function new_video_ajax() {
    var new_video = $.ajax({
        type: "GET",
        url: "/cakephp-2.x/gentolmen/new_video_data",
        async: false,
    }).responseText;
    return new_video;
}

function recommend_ajax() {
    var recommend_video = $.ajax({
        type: "GET",
        url: "/cakephp-2.x/gentolmen/recommend_data",
        async: false,
    }).responseText;
    return recommend_video;
}

function rank_ajax() {
    var rank_video = $.ajax({
        type: "GET",
        url: "/cakephp-2.x/gentolmen/rank_data",
        async: false,
    }).responseText;
    return rank_video;
}

function recently_ajax() {
    var rank_video = $.ajax({
        type: "GET",
        url: "/cakephp-2.x/gentolmen/recently_data",
        async: false,
    }).responseText;
    return rank_video;
}