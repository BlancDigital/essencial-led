// ANIMATE STUFF

// Observer to animate things from a 1x1 to a (any number) x (any number)
// 1x1:   [item]
//
// 3x3:   [item, item, item]
//        [item, item, item]
//
// It's expandable, just add values to the afl and afr arrays
// And change the numbers in the aft and afb arrays (based on index)
// Each index is based on the children html collection of the parent
// -----------------------------------------------------------------
// The intersection ratio is an estimative of when the next row will
// be visible on the screen.

// (a)nimation (f)rom (d)irection
// Index for each item to animate
const afl = [0]
const afr = [2]
const aft = []
const afb = [1]

let cardsObserver = new IntersectionObserver(function (entries) {
  // loop through the benefit items
  if (entries[0].isIntersecting) {
    if (entries[0].intersectionRatio < 0.85) {
      // apply for the first 3 elements
      let i = 0
      for (i; i <= 2; i++) {
        // from-left animation
        if (afl.includes(i)) {
          entries[0].target.children[i].style.animation = "afl 1s both"
        }

        // from-right animation
        if (afr.includes(i)) {
          entries[0].target.children[i].style.animation = "afr 1s both"
        }

        // top-to-bottom animation
        if (aft.includes(i)) {
          entries[0].target.children[i].style.animation = "aft 1s both"
        }

        // bottom-to-top animation
        if (afb.includes(i)) {
          entries[0].target.children[i].style.animation = "afb 1s both"
        }
      }
    }
  }
  //
})

cardsObserver.observe(document.querySelector(".cards"))

// FORM STUFF

// get all alerts of the form
// const avisos = document.querySelectorAll(".alert")

// SEND FORM -- fetch api

const form = document.getElementById("enviar")
const exitForm = document.getElementById("exitForm")

// MODAL
/* The form is inside a modal, which is display: none by default 
   The main purpose of the modal is to add a darker background behind the form
*/

//get the modal
const modal = document.querySelector(".modal--main-form")
const exitModal = document.querySelector(".modal--exit-form")

const nameForm = document.querySelector("#nameForm")
nameForm.addEventListener("input", (e) => validateName(e.target))

const cellphoneForm = document.querySelector("#cellphoneForm")
cellphoneForm.addEventListener("input", (e) => validateNumber(e.target))

const emailForm = document.querySelector("#emailForm")
emailForm.addEventListener("input", (e) => validateEmail(e.target))

const stripBanner = document.querySelector("#stripBanner")
const stripEmail = document.querySelector("#stripEmail")

const stripCta = document.querySelector(".btn--strip")
stripCta.addEventListener("click", (e) => {
  oneWayBind(stripEmail, emailForm)
})

// EXIT FORM STUFF

/* The exit form has 2 steps:
  (1) the main trigger (which is above the trigger activator)
  (2) the trigger activator (which is a switch to allow or not the
      trigger to show to exit form)
  
  1: If the user enter the activator area, it will make the exitFormActivator
  variable true, hence allowing the next step to happen
  2: If the user enter the trigger area, and the exitFormActivator is true, then
  the form will be shown, and the hasExitFormBeenShown will become true, not allowing
  it to show again, until a page refresh
     
*/

let hasExitFormBeenShown = false
let exitFormActivator = false

const exitFormTrigger = document.querySelector("#exitFormTrigger")
exitFormTrigger.addEventListener("mouseenter", () => {
  if (
    !hasExitFormBeenShown &&
    exitFormActivator &&
    modal.classList.contains("is-hidden")
  ) {
    openModal(exitModal)

    hasExitFormBeenShown = true
  }
})

const exitFormTriggerActivator = document.querySelector(
  "#exitFormTriggerActivator"
)
exitFormTriggerActivator.addEventListener("mouseenter", () => {
  exitFormActivator = true

  // TODO: Change the detector from HTMLElements to mouse zones, to avoid block the user

  // prevents the div from blocking mouse events
  exitFormTriggerActivator.classList.add("is-hidden")
})

// Get the button that opens the modal
const ctas = document.querySelectorAll(".btn--cta")

// add click listeners to button to open the modal
for (let i = 0; i < ctas.length; i++) {
  ctas[i].addEventListener("click", () => openModal(modal), true)
}

const alertForm = document.querySelector("#alertForm")

// (F) OPENMODAL

function openModal(modal) {
  if (modal.style.display == "none") {
    modal.style.display = "flex"
    stripBanner.classList.add("is-hidden")
  } else {
    modal.classList.remove("is-hidden")
    modal.style.animation = "fade-in 1s both"
    stripBanner.classList.add("is-hidden")
  }
}

// Get the button element that closes the modal
const btnCloseForm = document.querySelector(".btn--close")

btnCloseForm.onclick = function () {
  modal.classList.add("is-hidden")
  stripBanner.classList.remove("is-hidden")
}

const btnCloseExitForm = document.querySelector(".btn--close-exit")
btnCloseExitForm.onclick = function () {
  exitModal.classList.add("is-hidden")
  stripBanner.classList.remove("is-hidden")
}

function showLog(e) {
  console.log(e)
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function (event) {
  if (event.target == modal) {
    // delays the addition of the class for 1s to play the animation
    setTimeout(() => {
      modal.classList.add("is-hidden")
    }, 1000)
    modal.style.animation = "fade-out 1s both"
    stripBanner.classList.remove("is-hidden")
  }
}

form.addEventListener(
  "submit",
  function (e) {
    // e.preventDefault()

    // this refers to the form itself
    // const formData = new FormData(form)
    if (validateForm()) {
      modal.classList.add("is-hidden")
      stripBanner.classList.remove("is-hidden")

      // Swal.fire({
      //   title: "Obrigado !",
      //   text: "O quanto antes nossa equipe entrar?? em contato com voc??!",
      //   icon: "success",
      //   showCancelButton: false,
      //   confirmButtonColor: "#ffb042",
      //   cancelButtonColor: "#d33",
      //   confirmButtonText: "Ok!",
      // }).then((result) => {
      //   if (result.isConfirmed) {
      //     location.reload()
      //   }
      // })

      // Event snippet for Envio de formul??rio conversion page
      gtag("event", "conversion", {
        send_to: "AW-302885338/DhUICMHkyvMCENrTtpAB",
      })
      return true
    } else {
      e.preventDefault()
      return false
      // cellphoneForm.setCustomValidity("Porfavor, use um n??mero v??lido")
    }

    /* Reload the window independent of where the user click
       To prevent bugs or undesirable behavior*/
    // window.onclick = function () {
    //   location.reload()
    // }
  },
  true
)

exitForm.addEventListener("submit", function (e) {
  // this refers to the form itself
  // const formData = new FormData(form)
  exitModal.classList.add("is-hidden")
  stripBanner.classList.remove("is-hidden")

  // Swal.fire({
  //   title: "Obrigado !",
  //   text: "O quanto antes nossa equipe entrar?? em contato com voc??!",
  //   icon: "success",
  //   showCancelButton: false,
  //   confirmButtonColor: "#ffb042",
  //   cancelButtonColor: "#d33",
  //   confirmButtonText: "Ok!",
  // })

  return true
})

// prevent the key "Enter" from submitting the form
window.addEventListener(
  "keydown",
  function (e) {
    if (
      e.keyIdentifier == "U+000A" ||
      e.keyIdentifier == "Enter" ||
      e.keyCode == 13
    ) {
      if (e.target.nodeName == "INPUT" && e.target.type !== "textarea") {
        e.preventDefault()
        return false
      }
    }
  },
  true
)

// FORM

// (F) VALIDATEFORM

let isNumberValidated = false
let isNameValidated = false
let isEmailValidated = false

function validateName(element) {
  // if the element is not empty, validate
  if (element.value.length > 0) {
    element.style.borderBottom = "0.25rem solid green"

    // remove the alert to not confuse the user
    alertForm.classList.add("is-hidden")

    isNameValidated = true
    return true
  } else {
    element.style.borderBottom = "0.0625rem solid #aaaaaa"

    isNameValidated = false
    return false
  }
}

// VALIDATE NUMBER

const cellphoneRegex =
  /^\(?(?:[14689][1-9]|2[12478]|3[1234578]|5[1345]|7[134579])\)? ?(?:[2-8]|9[1-9])[0-9]{3}\-?[0-9]{4}$/

function validateNumber(element) {
  console.log(element instanceof HTMLElement)
  // if the number passes on the regExp, validate
  if (cellphoneRegex.test(element.value)) {
    element.style.borderBottom = "0.25rem solid green"

    // remove the alert to not confuse the user
    alertForm.classList.add("is-hidden")

    isNumberValidated = true
    return true
  } else {
    // if the element is empty, remove the border
    if (element.value.length === 0) {
      element.style.borderBottom = "0.0625rem solid #aaaaaa"
    } else {
      // else add a red border
      element.style.borderBottom = "0.25rem solid red"
    }

    isNumberValidated = false
    return false
  }
}

function mascara(telefone) {
  if (telefone.value.length == 0) telefone.value = "(" + telefone.value

  if (telefone.value.length == 3) telefone.value = telefone.value + ") " //quando o campo j?? tiver 3 caracteres (um par??nteses e 2 n??meros) o script ir?? inserir mais um par??nteses, fechando assim o c??digo de ??rea.

  if (telefone.value.length == 10) telefone.value = telefone.value + "-" //quando o campo j?? tiver 10 caracteres, o script ir?? inserir um tracinho, para melhor visualiza????o do telefone.
}

const emailRegex = /[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$/

// VALIDATE EMAIL

function validateEmail(element) {
  // if the number passes on the regExp, validate
  if (emailRegex.test(element.value)) {
    element.style.borderBottom = "0.25rem solid green"

    // remove the alert to not confuse the user
    alertForm.classList.add("is-hidden")

    isEmailValidated = true
    return true
  } else {
    // if the element is empty, remove the border
    if (element.value.length === 0) {
      element.style.borderBottom = "0.0625rem solid #aaaaaa"
    } else {
      // else add a red border
      element.style.borderBottom = "0.25rem solid red"
    }

    isEmailValidated = false
    return false
  }
}

// VALIDATE FORM

function validateForm(e) {
  console.log(isNumberValidated, isNameValidated, isEmailValidated)
  if (isNumberValidated && isNameValidated && isEmailValidated) {
    console.log(e)
    return true
  } else {
    console.log("--")
    alertForm.classList.remove("is-hidden")
    return false
  }
}

// function validateCaptcha(token) {
//   // OK - GOOGLE ANSWERING THE FETCH
//   let response = fetch(
//     `https://www.google.com/recaptcha/api/siteverify?secret=6Lf_RCQcAAAAAFzuwE-1IBg6kmvye6NLcqFdN2Zw&response=${token}`,
//     {
//       method: "POST",
//       mode: "cors",
//     }
//   )
//     .then(function (response) {
//       // if (!response.ok) {
//       //   throw new Error("Network response was not ok")
//       // }

//       // transform from json to a js object
//       response.json()
//     })
//     .then((response) => {
//       console.log(response)

//       return true
//     })
//     .catch(function (err) {
//       console.log(err)

//       return false
//     })

//   console.log(response)
//   return true
// }

// (F) CAPITALIZE

function capitalize(word) {
  let arr = word.split(" ")
  let i = 0
  for (i; i < arr.length; i++) {
    arr[i] = arr[i].charAt(0).toUpperCase() + arr[i].slice(1)
  }

  return arr.join(" ")
}

// (F) FIRST-WORD

function firstWord(word) {
  let arr = word.split(" ")

  return arr[0]
}

//  (F) ONE-WAY BIND
function oneWayBind(source, target) {
  // Expects two HTML Elements
  target.value = source.value

  validateEmail(emailForm)
}
