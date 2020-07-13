
 function member1(){
            var btn1= document.getElementById("b1");
            var bm1 = document.getElementById("BMD1");
            if (bm1.style.display === "none"){
                bm1.style.display = "block";
                btn1.innerHTML="View Less";
            }else{
                bm1.style.display = "none";
                btn1.innerHTML="View More";
            }
        }