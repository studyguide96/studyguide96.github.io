/* var h = "../img/sena.jpg"; */
/* for (var i = 0; i < 3; i++) {
    var h = document.getElementsByClassName("link")[i].id;
    console.log(h);
 } */
document.querySelectorAll(".sendId").forEach(el => {
    el.addEventListener("click", e => {
        /* var id = e.target.getAttribute("id");
        console.log("Se ha clickeado el id " + id);
        var urlink = id+".jpg";
        console.log(urlink)7; */
        var id = "../img/360/" + e.target.getAttribute("id") + ".jpg";
        console.log(id);
        pannellum.viewer('panorama', {
            "type": "equirectangular",
            "panorama": id,
            "preview": "../img/vistaprevia.jpg",
            "showControls": true,
            "autoRotate": -18,
            "pitch": 0.2,
            "yaw": -195.4,
            "hfov": 10,
            /* "autoLoad": true */
        });
    });
});