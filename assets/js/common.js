function getElementsByClass(searchClass,node,tag) {
	var classElements = new Array();
	if ( node == null )	node = document;
	if ( tag == null ) tag = '*';
	var els = node.getElementsByTagName(tag);
	var elsLen = els.length;
	var pattern = new RegExp("(^|\\s)"+searchClass+"(\\s|$)");
	for (i = 0, j = 0; i < elsLen; i++) {
		if (pattern.test(els[i].className) ) {
			classElements[j] = els[i];
			j++;
		}
	}
	return classElements;
}

function ElemById(node,id) {
	if ( node == null )	node = document;
	if ( id == null ) id = 'none';
	
	return node.getElementById(id);
}


function clearChildren(element)
{
	for (var i = 0; i < element.childNodes.length; i++) 
	{
		var e = element.childNodes[i];
		if (e.tagName) 
			switch (e.tagName.toLowerCase()) 
			{
    			case 'input':
    				switch (e.type) 
    				{
    					case "text": e.value = '';break;
    					default: break;
    				}	break;
       
    			default: clearChildren(e);
			}
	}
}


function createSimpleElement(name, attrs) {
	var e = document.createElement(name);
	if (attrs) {
		for (key in attrs) {
			if (key == 'class') {
				e.className = attrs[key];
			} else if (key == 'id') {
				e.id = attrs[key];
			} else {
				e.setAttribute(key, attrs[key]);
			}
		}
	}
	return e;
} 



function createElement(name, attrs, style, text,past_id,position,changed) {
    var parent = document.getElementsByTagName('BODY')[0];
    var e = document.createElement(name);
    if (attrs) 
    {
        for (key in attrs) 
        {
            if (key == 'class') 
            {
                e.className = attrs[key];
            }
            else if (key == 'id') 
            {
                e.id = attrs[key];
            }
            else
            {
                e.setAttribute(key, attrs[key]);
            }
        }
    }
    if (style)
    {
        for (key in style) 
        {
            e.style[key] = style[key];
        }
    }
    if (text) 
    {
        e.appendChild(document.createTextNode(text));
    }
    parent.appendChild(e);
    if(past_id)
    {
          var old_elem = document.getElementById(past_id);
        if(position=='before')
        {            
            insertBefore(e,old_elem);
        }
        else if(position=='after')
        {
        	insertAfter(e,old_elem);
        }
        if(changed!='' && changed==true)
        {
            parent.removeChild(old_elem);
        }
    }
}



function showUser(str)
{
	if (str == "") {
		document.getElementById("txtHint").innerHTML = "";
		return;
	}
	if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp = new XMLHttpRequest();
	} else {// code for IE6, IE5
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
		}
	};
	xmlhttp.open("GET", "getuser.php?q=" + str, true);
	xmlhttp.send();
}

function validateCloseForm()
{
	    if  (
	        ( document.forms['executer_form'].person.value == '' ) ||
	        ( document.forms['executer_form'].phone.value == '' ) ||
	        ( document.forms['executer_form'].question.value == '' )
	    )
	    {
	        alert('Не заполнены обязательные поля');
	    }

	    return;
}
//////////////!!!!!!!!!!!!!!!!!!!!!!!!!!!!
function checkForm(form)
{
	 // Заранее объявим необходимые переменные
	var el, // Сам элемент
	elName, // Имя элемента формы
	value, // Значение
	type; // Атрибут type для input-ов
	// Массив списка ошибок, по дефолту пустой
	var errorList = [];
	// Хэш с текстом ошибок (ключ - ID ошибки)
	var errorText = {
		1 : "Не заполнено поле ФИО ответственного",
		2 : "Не заполнено поле ФИО исполнителя",
		3 : "Не заполнено поле Причина выезда",
		4 : "Не заполнено поле Проделаные работы"		
	};
	// Получаем семейство всех элементов формы
	// Проходимся по ним в цикле
	for ( var i = 0; i < form.elements.length; i++) 
	{
		el = form.elements[i];
		elName = el.nodeName.toLowerCase();
		value = el.value;
		if (elName == "input") 
		{ // INPUT
			// Определяем тип input-а
			type = el.type.toLowerCase();
			// Разбираем все инпуты по типам и обрабатываем содержимое
			switch (type) 
			{
				case "text":
					if (el.name == "fio_otv" && value == "")
						errorList.push(1);
					if (el.name == "fio_isp" && value == "")
						errorList.push(2);
				break;
				
				default:
				// Сюда попадают input-ы, которые не требуют обработки
				// type = hidden, submit, button, image
				break;
			}
		}
		else
		{
			if (elName == "textarea") 
			{ // TEXTAREA
				if (el.name == "reason" && value == "")
					errorList.push(3);
				if (el.name == "worked" && value == "")
					errorList.push(4);
			} 
			else 
			{
			// Обнаружен неизвестный элемент ;)
			}
		}
	}
	// Финальная стадия
	// Если массив ошибок пуст - возвращаем true
	if (!errorList.length)
		return true;
	// Если есть ошибки - формируем сообщение, выовдим alert
	// и возвращаем false
	var errorMsg = "При заполнении формы допущены следующие ошибки:\n\n";
	for (i = 0; i < errorList.length; i++) {
		errorMsg += errorText[errorList[i]] + "\n";
	}
	alert(errorMsg);
	return false;
}






//Add request validate (for customer)
function checkFormAddRequestByCustomer(form)
{
	 // Заранее объявим необходимые переменные
	var el, // Сам элемент
	elName, // Имя элемента формы
	value; // Значение

	// Массив списка ошибок, по дефолту пустой
	var errorList = [];
	// Хэш с текстом ошибок (ключ - ID ошибки)
	var errorText = {
		1 : "Слишком много символов в поле ввода (max 1500). ",
		2 : "Поле ввода не должно быть пустым."
	};
	// Получаем семейство всех элементов формы
	// Проходимся по ним в цикле
	for ( var i = 0; i < form.elements.length; i++) 
	{
		el = form.elements[i];
		elName = el.nodeName.toLowerCase();
		value = el.value;
		if (elName == "textarea") 
		{ // TEXTAREA
			if (el.name == "description" && value.length > 1500)
				errorList.push(1);
			else if( el.name == "description" && value.trim().length < 1)
				errorList.push(2);
		} 
	}

	// Финальная стадия
	// Если массив ошибок пуст - возвращаем true
	if (!errorList.length)
		return true;
	// Если есть ошибки - формируем сообщение, выовдим alert
	// и возвращаем false
	var errorMsg = "При заполнении формы допущены следующие ошибки:\n\n";
	for (i = 0; i < errorList.length; i++) {
		errorMsg += errorText[errorList[i]] + "\n";
	}
	alert(errorMsg);
	return false;
}




function charactersLeft(txtfld)
{
	var left;
	
	left = 1500 - txtfld.value.length;
	ch_left.innerHTML= left + ' символов осталось';
	
	if(left < 0)
	{
		txtfld.value = txtfld.value.substr(0,1500);
	}
	
}





function removeDivWrapper(e)
{
	e.parentNode.parentNode.parentNode.parentNode.removeChild(e.parentNode.parentNode.parentNode);
}



function CreateFormElement()
{
	
	var form = document.getElementsByTagName('form')[0];
	
	var type_equip_label = document.getElementById('type_equip_label').cloneNode(true);
	var type_equip = document.getElementById('type_equip').cloneNode(true);
	var desc_equip = document.getElementById('desc_equip').cloneNode(true);
	//var equip = document.getElementById('equip').cloneNode(true);
		
	var elem = createSimpleElement('div',{'id':'wrapper'});
	elem.appendChild(type_equip_label);
	elem.appendChild(type_equip);
	elem.appendChild(desc_equip);
	
	var ed70 = createSimpleElement('div',{'class':'col-right-70'});
	var ed1 =  createSimpleElement('input',{'id':'array_name_equip','value':'','name':'array_name_equip[]','type':'text'});
	var edbr = createSimpleElement('br');
	var ed2 =  createSimpleElement('input',{'id':'array_serial_equip','value':'','name':'array_serial_equip[]','type':'text'});
	var edbr2 = createSimpleElement('br');
	var ed3 =  createSimpleElement('input',{'id':'array_invent_equip','value':'','name':'array_invent_equip[]','type':'text'});
	
		ed70.appendChild(ed1);
		ed70.appendChild(edbr);
		ed70.appendChild(ed2);
		ed70.appendChild(edbr2);
		ed70.appendChild(ed3);
	
	elem.appendChild(ed70);
	

	var bef = document.getElementById('wrapper');
	
	form.insertBefore(elem,bef);

}



function createBarcode()
{
	//var form = document.getElementsByTagName('form')[0];
	//var form = document.getElementById('form');
	
	var elem = createSimpleElement('div',{'class':'wrapper_barcode'});
	
	var row1 = createSimpleElement('div',{'class':'row'});
	var divID_BAR = createSimpleElement('div',{'class':'span3'});
	var divID_MEASURE = createSimpleElement('div',{'class':'span3'});
	var divBAR = createSimpleElement('div',{'class':'span3'});
	var divremove = createSimpleElement('div',{'class':'span1'});
		divremove.innerHTML = '<a href="#" onClick="removeDivWrapper(this); event.preventDefault();" > remove </a>';
	
	var row2 = createSimpleElement('div',{'class':'row'});
	var divDTYPE = createSimpleElement('div',{'class':'span3'});
	var divMINPRICE = createSimpleElement('div',{'class':'span3'});
	var divPRICE = createSimpleElement('div',{'class':'span3'});
	
	
	
	var labelID_BAR = createSimpleElement('label');
		labelID_BAR.innerHTML="ID_BAR";
	var inputID_BAR = createSimpleElement('input',{'name':'ID_BAR[]','type':'text','value':'notused'});
	
	var labelID_MEASURE = createSimpleElement('label');
		labelID_MEASURE.innerHTML="ID_MEASURE";
	var inputID_MEASURE = createSimpleElement('input',{'name':'ID_MEASURE[]','type':'text'});
	
	var labelBAR = createSimpleElement('label');
		labelBAR.innerHTML="BAR";
	var inputBAR = createSimpleElement('input',{'name':'BAR[]','type':'text'});
	
	var labelDTYPE = createSimpleElement('label');
		labelDTYPE.innerHTML="DTYPE";
	var inputDTYPE = createSimpleElement('input',{'name':'DTYPE[]','type':'text'});
	
	var labelMINPRICE = createSimpleElement('label');
		labelMINPRICE.innerHTML="MINPRICE";
	var inputMINPRICE = createSimpleElement('input',{'name':'MINPRICE[]','type':'text'});
	
	var labelPRICE = createSimpleElement('label');
		labelPRICE.innerHTML="PRICE";
	var inputPRICE = createSimpleElement('input',{'name':'PRICE[]','type':'text'});
	

	//divID_BAR.appendChild(labelID_BAR);
	//divID_BAR.appendChild(inputID_BAR);
	
	divID_MEASURE.appendChild(labelID_MEASURE);
	divID_MEASURE.appendChild(inputID_MEASURE);
	
	divBAR.appendChild(labelBAR);
	divBAR.appendChild(inputBAR);
	
	divDTYPE.appendChild(labelDTYPE);
	divDTYPE.appendChild(inputDTYPE);
	
	divMINPRICE.appendChild(labelMINPRICE);
	divMINPRICE.appendChild(inputMINPRICE);
	
	divPRICE.appendChild(labelPRICE);
	divPRICE.appendChild(inputPRICE);
	
	row1.appendChild(divID_BAR);
	row1.appendChild(divID_MEASURE);
	row1.appendChild(divBAR);
	row1.appendChild(divremove);
	
	row2.appendChild(divDTYPE);
	row2.appendChild(divMINPRICE);
	row2.appendChild(divPRICE);

	
	elem.appendChild(row1);
	elem.appendChild(row2);
	
	var bef = document.getElementById('place_for_insert');

	//form.insertBefore(elem,bef);
	bef.insertBefore(elem,null);
	
}


String.prototype.trim=function(){return this.replace(/^\s\s*/, '').replace(/\s\s*$/, '');};
String.prototype.ltrim=function(){return this.replace(/^\s+/,'');};
String.prototype.rtrim=function(){return this.replace(/\s+$/,'');};
String.prototype.fulltrim=function(){return this.replace(/(?:(?:^|\n)\s+|\s+(?:$|\n))/g,'').replace(/\s+/g,' ');};




