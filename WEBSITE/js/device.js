//$(document).ready(deV);

function deV(nome,tipo) {
    console.log("I'm ready! Sono device.js!");
    console.log(nome);
    
    var id = 1;
    
    $.ajax({
        method: "POST",
        crossDomain: true, 
        url: "/php/conDBdv.php", 
        data: {device:id},
        success: function(response) {
            console.log(JSON.parse(response));
            var device=JSON.parse(response);
            var el="";
            var el2="";
            for(var i=0;i<device.length;i++){
                if(i==0){
                    var k=0;
                    var j=i+1;
                }else if(i==device.length-1){
                    var k=i-1;
                    var j=i;
                }else{
                    var k=i-1;
                    var j=i+1;
                }
                if(device[i].A==nome){
                
                
                el+= "<a href='/pages/device.php?nome="+device[k].A+"&tipo="+device[k].F+"'><button id='back' type='button' class='btn btn-default btn-md'><span class='glyphicon glyphicon-menu-left' aria-hidden='true'></span></button></a>                                                                                                 <a href='/pages/device.php?nome="+device[j].A+"&tipo="+device[j].F+"'><button id='next' type='button' class='btn btn-default btn-md'><span class='glyphicon glyphicon-menu-right' aria-hidden='true'></span></button></a>                                                                                                                        <div class='col-md-9 col-xs-11'><img class='immagine blocco img-responsive left' id='dev' src='"+device[i].G+"'> <img class='immagine blocco img-responsive left'  src='"+device[i].G2+"'>                                                                                                                                                           <a href='/pages/as.php?nome=Online buying guide&tipo='><button type='button' class='btn btn-default btn-sm guide'><img src='/img/device/onlineguide.png' aria-hidden='true'></button></a>                                   <div id='idDevice2'></div>                                                                                        </div><h2 id='titolo'>"+device[i].A+"</h2> <div id='features' class='col-md-3 col-xs-12'><h3 id='sottotitolo''>Features</h3><p class='paragrafi'>"+device[i].C+"</p> <h4 class='prezzo-dev'>"+device[i].D+" $</h4> </div> <div id='desc' class='col-md-8 col-xs-12'><h3 id='sottotitolo'>Description</h3><p class='paragrafi'>"+device[i].B+"</p></div>";             
                }
                
                
            }
            
            if(nome=="Galaxy Gear S"||nome=="Repeater Wi-Fi ZyXEL AC750"){
                    
                el2+= "<a href='/pages/smartlife-generica.php?nome=TIMhome&tipo=Home-Family'><button type='button' class='btn btn-default btn-sm guide'><img src='http://hypproject.altervista.org/immagini/Smart%20Life/TIMhome.jpg' aria-hidden='true'></button></a> ";
                    
                }
            
            $("#idDevice").html(el);
            $("#idDevice2").html(el2);
            
            console.log("Ho finito!!");
        },
        error: function(request,error) 
        {
            console.log("error");
        }
    });

}
