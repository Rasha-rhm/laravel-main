function checkTotal()
{
    document.listform.amount.value="";
    var sum=0;
    var s = "";
    for(i=0;i<document.listform.choice.length;i++)
    {
        if(document.listform.choice[i].checked)
        {
            s=s+(document.listform.choice[i].value)+",";
            $n = document.listform.choice[i].value;                       
            sum=sum+parseInt(document.getElementById($n).textContent);
        }
    }    
    document.listform.sname.value=s;
    document.listform.amount.value=sum;
}



