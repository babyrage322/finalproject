$(document).ready(function(){
    $(window).scroll(function() {
        var y = $(window).scrollTop();
        if (y > 180) {
            $("header").css({
                            "position": "fixed",
                            "top": "0",
                            "transition": "all .25s linear",
                          });
            $(".logo_text h1").css({
                            "top": "-30px",
                            "left": "75px",
                            "position": "fixed",
                            "height":"20px",
                            "transition": "all .25s linear",
                            "float": "left",
                            "z-index":"2",
                            "width":"300px",
                          });

            $(".menubar").css({
                            "box-shadow":"0 2px 10px #666",
                            "background":"black",
                            "position":"fixed",
                            "float":"left",
                            "top":"0",
                            "width":"100%",
                            "height":"50px",
                            "z-index": "1"
                          });
            $(".menubar li a").css({
                          "position":"relative",
                          "margin-top":"15px",
                          "float":"right",
                          "left":"-140px",
                          "z-index": "3"
            });
        }else{
            $("header").css({
                            "position": "",
                            "top": "",
                            "transition": "all .25s linear"
                          });
            $(".logo_text h1").css({
                            "background": "",
                            "top": "",
                            "left": "",
                            "position": "",
                            "height":"",
                            "transition": "all .25s linear",
                            "font-size":"",
                          });
            $(".menubar").css({
                            "background": "",
                            "transition": "all .25s linear",
                            "box-shadow":"",
                            "width":"",
                            "float":"",
                            "position": "relative",
                            "top": "75px",
                            "height":"",
                            "margin-top":"",
                            "padding":"",
                          });
            $(".menubar li a").css({
                          "position":"",
                          "margin-top":"",
                          "float":"",
                          "left":""
            });
            $(".logo_text h2").css({
            			  "position": "relative",
            			  "top":"94px",
            			  "left":"-300px"
            })
        }
    }); 
});
