function repeat(n,code){
    for(i=0; i<n;i++){
        document.getElementById("repeater").innerHTML = 
              document.getElementById("repeater").innerHTML + "<br /> "
               + code;
    }
}

function vn(){

    var kd='<div class=" col-md-6 "> \
    <label for="Reminder-choice">Reminders:</label> \
        <input list="Reminders-list" id="Reminder-choice" name="Reminder-choice" /> \
                    <!-- <select  > --> \
                        <datalist id="Reminders-list"> \
                <option value="Drink Water">Drink Water</option> \
                <option value="Take your Medicines">Take your Medicines</option> \
                <option value="Eat">Eat</option> \
                <option value="Feed Family">Feed Family</option> \
                <option value="Take a 5 min walk">Take a 5 min walk</option> \
                <option value="Take a Breather">Take a Breather</option> \
                <option value="Take 30 mins for yourself">Take 30 mins for yourself</option> \
                <option value="Say something positive about your day or yourself">Say something positive about your day or yourself</option> \
                <option value="Walk your pet">Walk your pet</option> \
                <option value="You are beautiful, smart & loved">You are beautiful, smart & loved</option> \
                <option value="Other">Other</option> \
            </datalist> \
                    </div> \
    <div class = "col-md-3  "> \
    <select >\
        <option selected="selected" value="">Select Hour</option>\
        <option value="06">06</option>\
        <option value="07">07</option>\
        <option value="08">08</option>\
        <option value="09">09</option>\
        <option value="10">10</option>\
        <option value="11">11</option>\
    </select>\
    <select >\
        <option selected="selected" value="">Select Minute</option>\
        <option value="00">00</option>\
        <option value="30">30</option>\
    </select>\
    <select id="selAmPm">\
        <option selected="selected" value="">AM</option>\
    <!-- <option value="AM">AM</option> -->\
    <!-- <option value="PM">PM</option> -->\
    </select>\
    </div> \
    </div>'
    return kd;
    }




// kd.repeat(2);