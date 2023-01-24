function addTasktodo() {
	var btn=document.getElementById("todobtn");
	var form=document.getElementById("todoform");
		btn.classList.toggle("d-none");
		form.classList.toggle("d-none");

  }

  function addTaskb() {
    var list = document.querySelector('#item');
    var newTaskb = document.createElement('li');
    newTaskb.innerHTML = "<input>";
    list.appendChild(newTaskb);
  }
  function addTaskc() {
    var list = document.querySelector('#itemc');
    var newTaskc = document.createElement('li');
    newTaskc.innerHTML = "<input>";
    list.appendChild(newTaskc);
  }
