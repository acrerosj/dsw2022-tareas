document.forms.formcrear.addEventListener('submit', ()=>{
  if (document.forms.formcrear.tipo.value == 'trabajo') {
    document.forms.formcrear.action = '/index.php/trabajo/';
  }
});

document.forms.formcrear.tipo.forEach(radio => radio.addEventListener('change', ()=>{
    let panelFecha = document.getElementById('panel-fecha');
    if (document.forms.formcrear.tipo.value == 'trabajo') { 
      panelFecha.classList.remove('oculto');
    } else {
      panelFecha.classList.add('oculto');
    }
  })
);

