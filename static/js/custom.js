/***
*    @parm str Number String to format
*/
function addcomma(str){
	nstr = '';
	str = ''+str+'';
	minus = '';
	flootstr = '';
	if(str.charAt(0) == '-'){
		minus = '-';
		str = str.substring(1);
	}
	if(str.indexOf('.') > -1){
		flootstr = str.substring(str.indexOf('.'));
		str = str.substring(0,str.indexOf('.'));
	}
	if(str.length < 4)
		return (minus + str + flootstr);

	c = str.length%3;

	for(ci=0;ci<str.length;ci++){
		if((ci % 3) == c && ci != 0)
			nstr += ',';

		nstr += str.charAt(ci);
	}
	return (minus + nstr + flootstr);
}

/***
*    @parm str comma String to unformat
*/
function removecomma(commastr){
       nstr = '';
       for(ci=0;ci<commastr.length;ci++){
	       if(commastr.charAt(ci) == ',')
		       continue;
       else
	       nstr += '' + commastr.charAt(ci);
       }
       return nstr;
}

/**
 * Input Validation(check number)
 * call function filterNum and commaSplitAndNumberOnly
 *
 * 
 * @return string
 */
function formatNumber(ob, type)
{
    ob.value = filterNum(ob.value);
	if(type =="comma") {
	    ob.value = commaSplitAndNumberOnly(ob);
	} else if(type=="dot") {
	    ob.value = commaSplitAndAllowDot(ob);
	} else {
	    ob.value = noSplitAndNumberOnly(ob);
	}
    return false;
}

/**
 * Input Validation(check existance input)
 * if find input empty or just fill with " ", call trim function above and return false
 *
 * @param string input
 * @param string types
 * 
 * @return string
 */
function commaSplitAndNumberOnly(ob)
{
	var txtNumber='' + ob.value;
	
	while (txtNumber.length > 0 && (isNaN(txtNumber) || txtNumber.indexOf('.') != -1 )) { 
		txtNumber = txtNumber.substring(0, txtNumber.length - 1);
	}

	var rxSplit   = new RegExp('([0-9])([0-9][0-9][0-9][,.])');
	var arrNumber = txtNumber.split('.');
	arrNumber[0] +='.';
	
	do {
			arrNumber[0] = arrNumber[0].replace(rxSplit,'$1,$2');
	} while(rxSplit.test(arrNumber[0]));
	
	if(arrNumber.length > 1) {
		txtNumber = arrNumber.join('');
	}
	else{
		txtNumber = arrNumber[0].split('.')[0];
	}

	ob.focus();
	return txtNumber;
}

//alert(isNaN('1,234.00'));
/**
 * Input Validation(check existance input)
 * if find input empty or just fill with " ", call trim function above and return false
 *
 * @param string input
 * @param string types
 * 
 * @return string
 */
function commaSplitAndAllowDot(ob)
{
	var txtNumber='' + ob.value;
	
	while ( txtNumber.length > 0 && isNaN(txtNumber) ) {
		txtNumber = txtNumber.substring(0, txtNumber.length - 1 );
	}
	
	ob.value = txtNumber;
	
	var rxSplit   = new RegExp('([0-9])([0-9][0-9][0-9][,.])');
	var arrNumber = txtNumber.split('.');
	arrNumber[0] += '.';
	
	do {
		arrNumber[0] = arrNumber[0].replace(rxSplit,'$1,$2');
	} while (rxSplit.test(arrNumber[0]));
	
	if (arrNumber.length > 1) {
		txtNumber = arrNumber.join('');
	} else {
		txtNumber = arrNumber[0].split('.')[0];
	}
	
	ob.focus();
	return txtNumber;
}

/**
 * Input Validation(check existance input)
 * if find input empty or just fill with " ", call trim function above and return false
 *
 * @param string input
 * @param string types
 * 
 * @return string
 */
function noSplitAndNumberOnly(ob) 
{
    var txtNumber=''+ob.value;
    while ( txtNumber.length > 0 && (isNaN(txtNumber) || txtNumber.indexOf('.')!=-1 )){
        txtNumber = txtNumber.substring(0, txtNumber.length - 1 );
    }	
	
	ob.value = txtNumber;
	ob.focus();
	return ob.value;	
}