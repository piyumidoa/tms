function agrahara(f){
    if(f.chksagra.checked == true) {
    f.txtagra.value=125; 
}
}
function speallowanc(f){
    if(f.chksallow.checked == true) {
    var bsalary = f.txtsal_basic.value 
    if (bsalary>=15000){
        f.txtspec_allw.value=(bsalary*20)/100; 
    }            
    else{
        f.txtspec_allw.value=(bsalary*15)/100; 
    }
}
}
function epf(f){
    if(f.chkEPF.checked == true) {
    
    var bsalary = f.txtsal_basic.value;     
      f.txtepf.value=(bsalary*8)/100;
      //f.billingname.value = f.shippingname.value;
    //f.billingcity.value = f.shippingcity.value;
    //f.txtepf.value = f.txtsal_basic.value;
    }
}
function waop(f){
    if(f.chkwaop.checked == true) {

    var bsalary = f.txtsal_basic.value;     
    f.txt_waop.value=(bsalary*8)/100; 
    }
}
function mallow(f){
    if(f.chkmallow.checked == true) {
    var bsalary = f.txtsal_basic.value ;
    
        f.txtmarid_allow.value=(bsalary*8)/100; 
}
}