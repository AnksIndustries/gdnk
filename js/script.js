function showDev(type) {
    if (type == "") {
      document.getElementById("devdata").innerHTML = "Error opening...";
      return;
    } else {
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("devdata").innerHTML = this.responseText;
        }
      };
      xmlhttp.open("GET","getDevData.php?q="+type,true);
      xmlhttp.send();
    }
  }


jQuery(function($){
    showDev("type1");
    $('#dev1').on('click',function(){
        $('.nav-link').each(function(index){
            $(this).removeClass('active');
        });
        $(this).addClass('active');
        $('#heading').text($(this).text()+" Data");
        showDev("type1");
    });
    $('#dev2').on('click',function(){
        $('.nav-link').each(function(index){
            $(this).removeClass('active');
        });
        $(this).addClass('active');
        $('#heading').text($(this).text()+" Data");
        showDev("type2");
       
    });
});
/* 		jQuery(function($){
    // Websocket
    var websocket_server = new WebSocket("ws://localhost:8080/");
    websocket_server.onopen = function(e) {
        websocket_server.send(
            JSON.stringify({
                'type':'socket',
                'Machine_id':<?php //echo $session; ?>,
                'Machine_ip':<?php //echo $_SERVER['REMOTE_ADDR'];?>
            })
        );
    };
    websocket_server.onerror = function(e) {
        // Errorhandling
    }
    websocket_server.onmessage = function(e)
    {
        var json = JSON.parse(e.data);
        switch(json.type) {
            case 'chat':
                $('#chat_output').append(json.msg);
                break;
        }
    }
    // Events

    $('#chat_input').on('keyup',function(e){
        alert("clicked!");
        if(e.keyCode==13 && !e.shiftKey)
        {
            var chat_msg = "";
            websocket_server.send(
                JSON.stringify({
                    '#':'chat',
                    'Device ID':<?php //echo $session; ?>,
                    'BatVolt':battery_voltage,
                    'BatCurrent':battery_voltage,
                    'BatPower':battery_voltage,
                    'Battery Voltage(BV)':battery_voltage,
                    'Battery Voltage(BV)':battery_voltage,
                    'Battery Voltage(BV)':battery_voltage,
                    'Battery Voltage(BV)':battery_voltage,
                    'Battery Voltage(BV)':battery_voltage,
                })
            );
            $(this).val('');
        }
    });
});  */