{/* <button class="show-header-form"><img src="svg/header/search.svg"/></button>

<div class="input-wrapper">

  <button class="hide-input-button">&lt;</button> */}


  function showform(){
      
    //   let formDiv = document.querySelector('.')


    let showButton = document.querySelector('.show-header-form-btn')
    let formDiv = document.querySelector('.input-wrapper')
    let closeBtn = document.querySelector('.hide-input-button')

    showButton.addEventListener('click', ()=>{
        formDiv.classList.add('show-search-form')
    })
    closeBtn.addEventListener('click', ()=>{
        formDiv.classList.remove('show-search-form')
    })

  }

  showform();

  const formHandler = () => {
    const form = document.querySelector('.header-form')
    form.addEventListener('submit', event => {
      event.preventDefault();

      const searchInputValue = document.querySelector('#search').value

      form.action = `https://www.remindbrindes.com.br/catalogo.php?search=${searchInputValue}`
      form.submit()
    })
  }

  formHandler()