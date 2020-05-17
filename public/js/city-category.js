$(document).ready(function(){
    $('#form-search').submit(function(e){
      let cat = $('#categorys').val();
      let cit = $('#citys').val();

      let ercat = document.getElementById('er-category');
      let ercit = document.getElementById('er-city');

      let errors = [];

      if(cat == "")
      {
        e.preventDefault();
        errors.push = "Neka mistake";
        ercat.innerHTML = "Please enter category";     
      }

      if(cit == "")
      {
        e.preventDefault();
        errors.push = "Neka mistake";
        ercit.innerHTML = "Please enter city";     
      }

      if(errors.length == 0)
      {
        return true;
      }
    });
  });