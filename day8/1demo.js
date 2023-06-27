function demoExternalAlert()
        {
            alert("Internal confirm")
        }
        function demoexternalConfirm()
        {
            if(confirm("Are you sure")){
                alert("yess!");
            }
            else
            {
                alert("no");
            }
        }
        function demoexternalpromot()
        {
            var fname=prompt("enter the first name:");
            var lname=prompt("enter the last name:");
            alert(fname+" "+lname);

        }