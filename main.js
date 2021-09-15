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
