<head>
    <title>Ejercicio_jQuery</title>
    <script src="imports/jquery-3.6.1.min.js"></script>
</head>

<body>
    <p id="counter" style="margin-bottom: 100px;">Clicks validos</p>
    <!-- <button id="b1" style="position: absolute; width: 100px; height: 100px"> -->
    
    <script>
        let max = 1000;
        let min = 500;
        for(i = 0; i<100; i++) {
            let s = Math.floor((Math.random() * (max - min + 1) + min));
            setTimeout(function(){
                let x = Math.floor((Math.random() * window.innerWidth) + 1);
                let y = Math.floor((Math.random() * window.innerHeight) + 1);
                let btn = $('<input/>').attr({id: i, type: 'button', style: `display: none; background-color: "red"; width: 100px; 
                    height: 100px; left: ${x}px; top: ${y}px`});
                $("body").append(btn);
                $("#"+i).fadeIn("slow");
                console.log($("#"+i));
            },s);
        }       
    /* OLD
        let x = Math.floor((Math.random() * window.innerWidth) + 1);
        let y = Math.floor((Math.random() * window.innerHeight) + 1);
        let c = 1;
        let r,g,b;
        $("#b1").click(function() {
            $("#counter").html(`Clicks validos ${c}`);
            $("#b1").animate({
                left:`${x}px`,
                top:`${y}px`,
            })
            g = Math.floor(Math.random() * 256);
            r = Math.floor(Math.random() * 256);
            b = Math.floor(Math.random() * 256);
            $("#b1").css("background-color",`rgb(${r},${g},${b})`);
            x = Math.floor((Math.random() * (window.innerWidth - $("#b1").width())));
            y = Math.floor((Math.random() * (window.innerHeight - $("#b1").height())));
            c++;
        });
    */
    </script>
</body>