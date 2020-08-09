function firstLoad(){
  var element = document.getElementById('listItem');
  var total = 0;
  itemsName = localStorage.getItem("itemsName").split(',');
  itemsPrice = localStorage.getItem("itemsPrice").split(',');
  total = itemsPrice.reduce(function(sum, item){
    return parseInt(item)+sum;
  }, 0);
  console.log(total);
  for(i=0; i<itemsName.length; i++){
    var row = document.createElement('tr');

    var data1 = document.createElement('td');
    att2 = document.createAttribute("style");
    att2.value = 'padding-left: 10px';
    data1.setAttributeNode(att2);
    var data2 = document.createElement('td');
    att2 = document.createAttribute("style");
    att2.value = 'padding-left: 10px';
    data2.setAttributeNode(att2);
    data1.innerHTML = itemsName[i];
    data2.innerHTML = itemsPrice[i];
    row.appendChild(data1);
    row.appendChild(data2);
    element.appendChild(row);
  }
  var row = document.createElement('tr');

  var data = document.createElement('th');
  var att = document.createAttribute("colspan");
  att.value = '2';
  att2 = document.createAttribute("style");
  att2.value = 'text-align:center; padding:50px';
  data.setAttributeNode(att2);
  data.setAttributeNode(att);

  data.innerHTML = 'Total: Rs.' + total.toString();
  row.appendChild(data);
  element.appendChild(row);
}

function submitBtn(){
  console.log('hello');
  location.href='success.php';

}
