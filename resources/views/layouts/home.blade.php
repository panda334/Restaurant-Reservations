<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TailFood – Free Tailwind CSS Restaurant Template</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <script defer="" src="https://unpkg.com/alpinejs@3.10.3/dist/cdn.min.js"></script>
    
  <style>/* ! tailwindcss v3.3.3 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";font-feature-settings:normal;font-variation-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-feature-settings:inherit;font-variation-settings:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}dialog{padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.container{width:100%}@media (min-width: 640px){.container{max-width:640px}}@media (min-width: 768px){.container{max-width:768px}}@media (min-width: 1024px){.container{max-width:1024px}}@media (min-width: 1280px){.container{max-width:1280px}}@media (min-width: 1536px){.container{max-width:1536px}}.relative{position:relative}.order-1{order:1}.-mx-3{margin-left:-0.75rem;margin-right:-0.75rem}.mx-4{margin-left:1rem;margin-right:1rem}.mx-auto{margin-left:auto;margin-right:auto}.my-16{margin-top:4rem;margin-bottom:4rem}.my-8{margin-top:2rem;margin-bottom:2rem}.-mt-16{margin-top:-4rem}.mb-12{margin-bottom:3rem}.mb-2{margin-bottom:0.5rem}.mb-3{margin-bottom:0.75rem}.mb-4{margin-bottom:1rem}.mb-8{margin-bottom:2rem}.ml-1{margin-left:0.25rem}.ml-3{margin-left:0.75rem}.mt-12{margin-top:3rem}.mt-2{margin-top:0.5rem}.mt-4{margin-top:1rem}.mt-8{margin-top:2rem}.block{display:block}.inline{display:inline}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.hidden{display:none}.h-20{height:5rem}.h-48{height:12rem}.h-5{height:1.25rem}.h-6{height:1.5rem}.h-8{height:2rem}.h-80{height:20rem}.h-auto{height:auto}.w-20{width:5rem}.w-5{width:1.25rem}.w-6{width:1.5rem}.w-8{width:2rem}.w-full{width:100%}.max-w-6xl{max-width:72rem}.max-w-lg{max-width:32rem}.max-w-md{max-width:28rem}.max-w-xs{max-width:20rem}.flex-col{flex-direction:column}.flex-wrap{flex-wrap:wrap}.items-center{align-items:center}.justify-end{justify-content:flex-end}.justify-center{justify-content:center}.justify-between{justify-content:space-between}.gap-2{gap:0.5rem}.gap-4{gap:1rem}.gap-y-6{row-gap:1.5rem}.space-x-4 > :not([hidden]) ~ :not([hidden]){--tw-space-x-reverse:0;margin-right:calc(1rem * var(--tw-space-x-reverse));margin-left:calc(1rem * calc(1 - var(--tw-space-x-reverse)))}.space-y-4 > :not([hidden]) ~ :not([hidden]){--tw-space-y-reverse:0;margin-top:calc(1rem * calc(1 - var(--tw-space-y-reverse)));margin-bottom:calc(1rem * var(--tw-space-y-reverse))}.overflow-hidden{overflow:hidden}.rounded{border-radius:0.25rem}.rounded-full{border-radius:9999px}.rounded-lg{border-radius:0.5rem}.rounded-md{border-radius:0.375rem}.border{border-width:1px}.border-2{border-width:2px}.border-t{border-top-width:1px}.border-gray-200{--tw-border-opacity:1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-green-500{--tw-border-opacity:1;border-color:rgb(34 197 94 / var(--tw-border-opacity))}.border-transparent{border-color:transparent}.bg-gray-50{--tw-bg-opacity:1;background-color:rgb(249 250 251 / var(--tw-bg-opacity))}.bg-gray-800{--tw-bg-opacity:1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.bg-green-600{--tw-bg-opacity:1;background-color:rgb(22 163 74 / var(--tw-bg-opacity))}.bg-pink-500{--tw-bg-opacity:1;background-color:rgb(236 72 153 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-red-500{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gradient-to-r{background-image:linear-gradient(to right, var(--tw-gradient-stops))}.from-green-400{--tw-gradient-from:#4ade80 var(--tw-gradient-from-position);--tw-gradient-to:rgb(74 222 128 / 0) var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.to-blue-500{--tw-gradient-to:#3b82f6 var(--tw-gradient-to-position)}.bg-cover{background-size:cover}.bg-clip-text{-webkit-background-clip:text;background-clip:text}.bg-center{background-position:center}.bg-no-repeat{background-repeat:no-repeat}.fill-current{fill:currentColor}.object-cover{object-fit:cover}.p-3{padding:0.75rem}.p-4{padding:1rem}.p-6{padding:1.5rem}.px-10{padding-left:2.5rem;padding-right:2.5rem}.px-2{padding-left:0.5rem;padding-right:0.5rem}.px-3{padding-left:0.75rem;padding-right:0.75rem}.px-4{padding-left:1rem;padding-right:1rem}.px-5{padding-left:1.25rem;padding-right:1.25rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.px-8{padding-left:2rem;padding-right:2rem}.py-0{padding-top:0px;padding-bottom:0px}.py-0\.5{padding-top:0.125rem;padding-bottom:0.125rem}.py-2{padding-top:0.5rem;padding-bottom:0.5rem}.py-20{padding-top:5rem;padding-bottom:5rem}.py-3{padding-top:0.75rem;padding-bottom:0.75rem}.py-32{padding-top:8rem;padding-bottom:8rem}.py-4{padding-top:1rem;padding-bottom:1rem}.py-6{padding-top:1.5rem;padding-bottom:1.5rem}.py-8{padding-top:2rem;padding-bottom:2rem}.pb-12{padding-bottom:3rem}.pb-6{padding-bottom:1.5rem}.pt-12{padding-top:3rem}.pt-4{padding-top:1rem}.text-left{text-align:left}.text-center{text-align:center}.font-mono{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace}.text-2xl{font-size:1.5rem;line-height:2rem}.text-3xl{font-size:1.875rem;line-height:2.25rem}.text-4xl{font-size:2.25rem;line-height:2.5rem}.text-base{font-size:1rem;line-height:1.5rem}.text-lg{font-size:1.125rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.text-xl{font-size:1.25rem;line-height:1.75rem}.font-bold{font-weight:700}.font-extrabold{font-weight:800}.font-medium{font-weight:500}.font-semibold{font-weight:600}.uppercase{text-transform:uppercase}.leading-5{line-height:1.25rem}.leading-6{line-height:1.5rem}.leading-normal{line-height:1.5}.tracking-tight{letter-spacing:-0.025em}.text-blue-300{--tw-text-opacity:1;color:rgb(147 197 253 / var(--tw-text-opacity))}.text-blue-500{--tw-text-opacity:1;color:rgb(59 130 246 / var(--tw-text-opacity))}.text-blue-600{--tw-text-opacity:1;color:rgb(37 99 235 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-800{--tw-text-opacity:1;color:rgb(31 41 55 / var(--tw-text-opacity))}.text-green-50{--tw-text-opacity:1;color:rgb(240 253 244 / var(--tw-text-opacity))}.text-green-500{--tw-text-opacity:1;color:rgb(34 197 94 / var(--tw-text-opacity))}.text-green-600{--tw-text-opacity:1;color:rgb(22 163 74 / var(--tw-text-opacity))}.text-pink-400{--tw-text-opacity:1;color:rgb(244 114 182 / var(--tw-text-opacity))}.text-pink-50{--tw-text-opacity:1;color:rgb(253 242 248 / var(--tw-text-opacity))}.text-red-50{--tw-text-opacity:1;color:rgb(254 242 242 / var(--tw-text-opacity))}.text-transparent{color:transparent}.text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.shadow-lg{--tw-shadow:0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);--tw-shadow-colored:0 10px 15px -3px var(--tw-shadow-color), 0 4px 6px -4px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-md{--tw-shadow:0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);--tw-shadow-colored:0 4px 6px -1px var(--tw-shadow-color), 0 2px 4px -2px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-xl{--tw-shadow:0 20px 25px -5px rgb(0 0 0 / 0.1), 0 8px 10px -6px rgb(0 0 0 / 0.1);--tw-shadow-colored:0 20px 25px -5px var(--tw-shadow-color), 0 8px 10px -6px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.transition-colors{transition-property:color, background-color, border-color, fill, stroke, -webkit-text-decoration-color;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke, -webkit-text-decoration-color;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.duration-150{transition-duration:150ms}.hover\:bg-green-500:hover{--tw-bg-opacity:1;background-color:rgb(34 197 94 / var(--tw-bg-opacity))}.hover\:bg-green-700:hover{--tw-bg-opacity:1;background-color:rgb(21 128 61 / var(--tw-bg-opacity))}.hover\:text-gray-400:hover{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.hover\:text-green-400:hover{--tw-text-opacity:1;color:rgb(74 222 128 / var(--tw-text-opacity))}.focus\:border-green-400:focus{--tw-border-opacity:1;border-color:rgb(74 222 128 / var(--tw-border-opacity))}.focus\:text-gray-400:focus{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.focus\:outline-none:focus{outline:2px solid transparent;outline-offset:2px}.focus\:ring-1:focus{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.focus\:ring-green-600:focus{--tw-ring-opacity:1;--tw-ring-color:rgb(22 163 74 / var(--tw-ring-opacity))}.active\:bg-green-600:active{--tw-bg-opacity:1;background-color:rgb(22 163 74 / var(--tw-bg-opacity))}@media (min-width: 640px){.sm\:-mx-3{margin-left:-0.75rem;margin-right:-0.75rem}.sm\:mb-0{margin-bottom:0px}.sm\:w-auto{width:auto}.sm\:max-w-md{max-width:28rem}.sm\:max-w-sm{max-width:24rem}.sm\:rounded-xl{border-radius:0.75rem}.sm\:p-12{padding:3rem}.sm\:px-20{padding-left:5rem;padding-right:5rem}.sm\:leading-none{line-height:1}}@media (min-width: 768px){.md\:mt-0{margin-top:0px}.md\:block{display:block}.md\:flex{display:flex}.md\:hidden{display:none}.md\:w-1\/2{width:50%}.md\:w-auto{width:auto}.md\:max-w-3xl{max-width:48rem}.md\:max-w-none{max-width:none}.md\:flex-row{flex-direction:row}.md\:items-center{align-items:center}.md\:justify-end{justify-content:flex-end}.md\:justify-between{justify-content:space-between}.md\:space-x-10 > :not([hidden]) ~ :not([hidden]){--tw-space-x-reverse:0;margin-right:calc(2.5rem * var(--tw-space-x-reverse));margin-left:calc(2.5rem * calc(1 - var(--tw-space-x-reverse)))}.md\:space-y-0 > :not([hidden]) ~ :not([hidden]){--tw-space-y-reverse:0;margin-top:calc(0px * calc(1 - var(--tw-space-y-reverse)));margin-bottom:calc(0px * var(--tw-space-y-reverse))}.md\:px-0{padding-left:0px;padding-right:0px}.md\:px-3{padding-left:0.75rem;padding-right:0.75rem}.md\:px-32{padding-left:8rem;padding-right:8rem}.md\:pb-0{padding-bottom:0px}.md\:text-center{text-align:center}.md\:text-2xl{font-size:1.5rem;line-height:2rem}}@media (min-width: 1024px){.lg\:order-1{order:1}.lg\:mb-0{margin-bottom:0px}.lg\:mt-0{margin-top:0px}.lg\:flex{display:flex}.lg\:w-1\/2{width:50%}.lg\:w-full{width:100%}.lg\:max-w-full{max-width:100%}.lg\:max-w-lg{max-width:32rem}.lg\:max-w-md{max-width:28rem}.lg\:grid-cols-3{grid-template-columns:repeat(3, minmax(0, 1fr))}.lg\:grid-cols-4{grid-template-columns:repeat(4, minmax(0, 1fr))}.lg\:justify-between{justify-content:space-between}.lg\:space-y-4 > :not([hidden]) ~ :not([hidden]){--tw-space-y-reverse:0;margin-top:calc(1rem * calc(1 - var(--tw-space-y-reverse)));margin-bottom:calc(1rem * var(--tw-space-y-reverse))}.lg\:px-16{padding-left:4rem;padding-right:4rem}.lg\:pr-0{padding-right:0px}.lg\:text-5xl{font-size:3rem;line-height:1}.lg\:text-lg{font-size:1.125rem;line-height:1.75rem}.lg\:text-xl{font-size:1.25rem;line-height:1.75rem}}@media (min-width: 1280px){.xl\:mb-6{margin-bottom:1.5rem}.xl\:px-5{padding-left:1.25rem;padding-right:1.25rem}.xl\:py-3{padding-top:0.75rem;padding-bottom:0.75rem}}</style></head>

  <body>
    <div class="bg-white shadow-md" x-data="{ isOpen: false }">
      <nav class="container px-6 py-8 mx-auto md:flex md:justify-between md:items-center">
        <div class="flex items-center justify-between">
          <a class="text-xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500 md:text-2xl hover:text-green-400" href="#">
            TailFood
          </a>
          <!-- Mobile menu button -->
          <div @click="isOpen = !isOpen" class="flex md:hidden">
            <button type="button" class="text-gray-800 hover:text-gray-400 focus:outline-none focus:text-gray-400" aria-label="toggle menu">
              <svg viewBox="0 0 24 24" class="w-6 h-6 fill-current">
                <path fill-rule="evenodd" d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z">
                </path>
              </svg>
            </button>
          </div>
        </div>

        <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
        <div :class="isOpen ? 'flex' : 'hidden'" class="flex-col mt-8 space-y-4 md:flex md:space-y-0 md:flex-row md:items-center md:space-x-10 md:mt-0 hidden">
          <a class="text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500 hover:text-green-400" href="#">Home</a>
          <a class="text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500 hover:text-green-400" href="#">About Us</a>
          <a class="text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500 hover:text-green-400" href="#">Our Menu</a>
          <a class="text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500 hover:text-green-400" href="#">Gallery</a>
          <div>
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
            </svg>
          </div>
        </div>
      </nav>
    </div>
    <!-- Main Hero Content -->
    <div class="container max-w-lg px-4 py-32 mx-auto text-left bg-center bg-no-repeat bg-cover md:max-w-none md:text-center" style="background-image: url('https://cdn.pixabay.com/photo/2016/11/18/14/39/beans-1834984_960_720.jpg')">
      <h1 class="font-mono text-3xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500 md:text-center sm:leading-none lg:text-5xl">
        <span class="inline md:block">Welcome To Larainfo Restaurant</span>
      </h1>
      <div class="mx-auto mt-2 text-green-50 md:text-center lg:text-lg">
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta voluptatem ab necessitatibus illo praesentium
        culpa excepturi quae commodi quaerat,
      </div>
      <div class="flex flex-col items-center mt-12 text-center">
        <span class="relative inline-flex w-full md:w-auto">
          <a href="#_" type="button" class="inline-flex items-center justify-center px-6 py-2 text-base font-bold leading-6 text-white bg-green-600 rounded-full lg:w-full md:w-auto hover:bg-green-500 focus:outline-none">
            Buy Now
          </a>
      </span></div>
    </div>
    <!-- End Main Hero Content -->
    <section class="px-2 py-32 bg-white md:px-0">
      <div class="container items-center max-w-6xl px-8 mx-auto xl:px-5">
        <div class="flex flex-wrap items-center sm:-mx-3">
          <div class="w-full md:w-1/2 md:px-3">
            <div class="w-full pb-6 space-y-4 sm:max-w-md lg:max-w-lg lg:space-y-4 lg:pr-0 md:pb-0">
              <!-- <h1
              class="text-4xl font-extrabold tracking-tight text-gray-900 sm:text-5xl md:text-4xl lg:text-5xl xl:text-6xl"
            > -->
              <h3 class="text-xl">OUR STORY
              </h3>
              <h2 class="text-4xl text-green-600">Welcome</h2>
              <!-- </h1> -->
              <p class="mx-auto text-base text-gray-500 sm:max-w-md lg:text-xl md:max-w-3xl">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus nemo incidunt praesentium, ipsum
                culpa minus eveniet, id nesciunt excepturi sit voluptate repudiandae. Explicabo, incidunt quia.
                Repellendus mollitia quaerat est voluptas!
              </p>
              <div class="relative flex">
                <a href="#_" class="flex items-center w-full px-6 py-3 mb-3 text-lg text-white bg-green-600 rounded-md sm:mb-0 hover:bg-green-700 sm:w-auto">
                  Read More
                  <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-1" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                  </svg>
                </a>
              </div>
            </div>
          </div>
          <div class="w-full md:w-1/2">
            <div class="w-full h-auto overflow-hidden rounded-md shadow-xl sm:rounded-xl">
              <img src="https://cdn.pixabay.com/photo/2017/08/03/13/30/people-2576336_960_720.jpg">
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="py-20 bg-gray-50">
      <div class="container items-center max-w-6xl px-4 px-10 mx-auto sm:px-20 md:px-32 lg:px-16">
        <div class="flex flex-wrap items-center -mx-3">
          <div class="order-1 w-full px-3 lg:w-1/2 lg:order-0">
            <div class="w-full lg:max-w-md">
              <h2 class="mb-4 text-2xl font-bold">About Us</h2>
              <h2 class="mb-4 text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500">
                WHY CHOOSE US?</h2>

              <p class="mb-4 font-medium tracking-tight text-gray-400 xl:mb-6">Lorem ipsum dolor sit amet consectetur
                adipisicing elit. Natus hic atque magni minus aliquam, eos quam incidunt nam iusto sunt voluptates
                inventore a veritatis doloremque corrupti. Veritatis est expedita cupiditate!</p>
              <ul>
                <li class="flex items-center py-2 space-x-4 xl:py-3">
                  <svg class="w-8 h-8 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z">
                    </path>
                  </svg>
                  <span class="font-medium text-gray-500">Faster Processing and Delivery</span>
                </li>
                <li class="flex items-center py-2 space-x-4 xl:py-3">
                  <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                  </svg>
                  <span class="font-medium text-gray-500">Easy Payments</span>
                </li>
                <li class="flex items-center py-2 space-x-4 xl:py-3">
                  <svg class="w-8 h-8 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                    </path>
                  </svg>
                  <span class="font-medium text-gray-500">100% Protection and Security for Your App</span>
                </li>
              </ul>
            </div>
          </div>
          <div class="w-full px-3 mb-12 lg:w-1/2 order-0 lg:order-1 lg:mb-0"><img class="mx-auto sm:max-w-sm lg:max-w-full" src="https://cdn.pixabay.com/photo/2020/12/31/12/28/cook-5876388_960_720.png" alt="feature image"></div>
        </div>
      </div>
    </section>
    <section class="mt-8 bg-white">
      <div class="mt-4 text-center">
        <h3 class="text-2xl font-bold">Our Menu</h3>
        <h2 class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500">
          TODAY'S SPECIALITY</h2>
      </div>
      <div class="container w-full px-5 py-6 mx-auto">
        <div class="grid lg:grid-cols-4 gap-y-6">
          <div class="max-w-xs mx-4 mb-2 rounded-lg shadow-lg">
            <img class="w-full h-48" src="https://cdn.pixabay.com/photo/2014/11/05/15/57/salmon-518032_960_720.jpg" alt="Image">
            <div class="px-6 py-4">
              <div class="flex mb-2">
                <span class="px-4 py-0.5 text-sm bg-red-500 rounded-full text-red-50">Seafood</span>
              </div>
              <h4 class="mb-3 text-xl font-semibold tracking-tight text-green-600 uppercase">salmon fish 1 seafood</h4>
              <p class="leading-normal text-gray-700">Lorem ipsum dolor, sit amet cons ectetur adipis icing
                elit.</p>
            </div>
            <div class="flex items-center justify-between p-4">
              <button class="px-4 py-2 bg-green-600 text-green-50">Order Now</button>
              <span class="text-xl text-green-600">$20.0</span>
            </div>
          </div>
          <div class="max-w-xs mx-4 mb-2 rounded-lg shadow-lg">
            <img class="w-full h-48" src="https://cdn.pixabay.com/photo/2010/12/13/10/25/canape-2802_960_720.jpg" alt="Image">
            <div class="px-6 py-4">
              <div class="flex mb-2">
                <span class="px-4 py-0.5 text-sm bg-pink-500 rounded-full text-pink-50">Seafood</span>
              </div>
              <h4 class="mb-3 text-xl font-semibold tracking-tight text-green-600 uppercase">salmon fish 2 seafood</h4>
              <p class="leading-normal text-gray-700">Lorem ipsum dolor, sit amet cons ectetur adipis icing
                elit.</p>
            </div>
            <div class="flex items-center justify-between p-4">
              <button class="px-4 py-2 bg-green-600 text-green-50">Order Now</button>
              <span class="text-xl text-green-600">$40.12</span>
            </div>
          </div>

          <div class="max-w-xs mx-4 mb-2 rounded-lg shadow-lg">
            <img class="w-full h-48" src="https://cdn.pixabay.com/photo/2015/04/08/13/13/food-712665_960_720.jpg" alt="Image">
            <div class="px-6 py-4">
              <div class="flex mb-2">
                <span class="px-4 py-0.5 text-sm bg-red-500 rounded-full text-red-50">Seafood</span>
              </div>
              <h4 class="mb-3 text-xl font-semibold tracking-tight text-green-600 uppercase">salmon fish 3 seafood</h4>
              <p class="leading-normal text-gray-700">Lorem ipsum dolor, sit amet cons ectetur adipis icing
                elit.</p>
            </div>
            <div class="flex items-center justify-between p-4">
              <button class="px-4 py-2 bg-green-600 text-green-50">Order Now</button>
              <span class="text-xl text-green-600">$50.12</span>
            </div>
          </div>

          <div class="max-w-xs mx-4 mb-2 rounded-lg shadow-lg">
            <img class="w-full h-48" src="https://cdn.pixabay.com/photo/2015/10/02/15/59/olive-oil-968657_960_720.jpg" alt="Image">
            <div class="px-6 py-4">
              <div class="flex mb-2">
                <span class="px-4 py-0.5 text-sm bg-pink-500 rounded-full text-pink-50">Tea</span>
              </div>
              <h4 class="mb-3 text-xl font-semibold tracking-tight text-green-600 uppercase">Fresh Tea</h4>
              <p class="leading-normal text-gray-700">Lorem ipsum dolor, sit amet cons ectetur adipis icing
                elit.</p>
            </div>
            <div class="flex items-center justify-between p-4">
              <button class="px-4 py-2 bg-green-600 text-green-50">Order Now</button>
              <span class="text-xl text-green-600">$4.00</span>
            </div>
          </div>
          <div class="max-w-xs mx-4 mb-2 rounded-lg shadow-lg">
            <img class="w-full h-48" src="https://cdn.pixabay.com/photo/2015/04/08/13/13/food-712665_960_720.jpg" alt="Image">
            <div class="px-6 py-4">
              <div class="flex mb-2">
                <span class="px-4 py-0.5 text-sm bg-red-500 rounded-full text-red-50">Seafood</span>
              </div>
              <h4 class="mb-3 text-xl font-semibold tracking-tight text-green-600 uppercase">salmon fish 3 seafood</h4>
              <p class="leading-normal text-gray-700">Lorem ipsum dolor, sit amet cons ectetur adipis icing
                elit.</p>
            </div>
            <div class="flex items-center justify-between p-4">
              <button class="px-4 py-2 bg-green-600 text-green-50">Order Now</button>
              <span class="text-xl text-green-600">$50.12</span>
            </div>
          </div>

          <div class="max-w-xs mx-4 mb-2 rounded-lg shadow-lg">
            <img class="w-full h-48" src="https://cdn.pixabay.com/photo/2015/10/02/15/59/olive-oil-968657_960_720.jpg" alt="Image">
            <div class="px-6 py-4">
              <div class="flex mb-2">
                <span class="px-4 py-0.5 text-sm bg-pink-500 rounded-full text-pink-50">Tea</span>
              </div>
              <h4 class="mb-3 text-xl font-semibold tracking-tight text-green-600 uppercase">Fresh Tea</h4>
              <p class="leading-normal text-gray-700">Lorem ipsum dolor, sit amet cons ectetur adipis icing
                elit.</p>
            </div>
            <div class="flex items-center justify-between p-4">
              <button class="px-4 py-2 bg-green-600 text-green-50">Order Now</button>
              <span class="text-xl text-green-600">$4.00</span>
            </div>
          </div>

        </div>
      </div>
    </section>
    <section class="pt-4 pb-12 bg-gray-50">
      <div class="my-8 text-center">
        <h2 class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500">
          Food Gallery</h2>
        <p class="text-xl">Lorem ipsum dolor sit amet consectetur adipisicing elit. soluta sapient</p>
      </div>
      <div class="container grid gap-4 mx-auto lg:grid-cols-3">
        <div class="w-full rounded">
          <img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxleHBsb3JlLWZlZWR8Mnx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=500&amp;q=60" alt="image" class="object-cover w-full h-80">
        </div>
        <div class="w-full rounded">
          <img src="https://images.unsplash.com/photo-1565299624946-b28f40a0ae38?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxleHBsb3JlLWZlZWR8NXx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=500&amp;q=60" alt="image" class="object-cover w-full h-80">
        </div>
        <div class="w-full rounded">
          <img src="https://images.unsplash.com/photo-1565958011703-44f9829ba187?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxleHBsb3JlLWZlZWR8Nnx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=500&amp;q=60" alt="image" class="object-cover w-full h-80">
        </div>
        <div class="w-full rounded">
          <img src="https://images.unsplash.com/photo-1512621776951-a57141f2eefd?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxleHBsb3JlLWZlZWR8MTB8fHxlbnwwfHx8fA%3D%3D&amp;auto=format&amp;fit=crop&amp;w=500&amp;q=60" alt="image" class="object-cover w-full h-80">
        </div>
        <div class="w-full rounded">
          <img src="https://images.unsplash.com/photo-1467003909585-2f8a72700288?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxleHBsb3JlLWZlZWR8MTF8fHxlbnwwfHx8fA%3D%3D&amp;auto=format&amp;fit=crop&amp;w=500&amp;q=60" alt="image" class="object-cover w-full h-80">
        </div>
        <div class="w-full rounded">
          <img src="https://images.unsplash.com/photo-1473093295043-cdd812d0e601?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxleHBsb3JlLWZlZWR8MTh8fHxlbnwwfHx8fA%3D%3D&amp;auto=format&amp;fit=crop&amp;w=500&amp;q=60" alt="image" class="object-cover w-full h-80">
        </div>
      </div>
    </section>

    <section class="pt-4 pb-12 bg-gray-800">
      <div class="my-16 text-center">
        <h2 class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500">
          Testimonial </h2>
        <p class="text-xl text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. soluta sapient</p>
      </div>
      <div class="grid gap-2 lg:grid-cols-3">
        <div class="max-w-md p-4 bg-white rounded-lg shadow-lg">
          <div class="flex justify-center -mt-16 md:justify-end">
            <img class="object-cover w-20 h-20 border-2 border-green-500 rounded-full" src="https://images.unsplash.com/photo-1499714608240-22fc6ad53fb2?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=334&amp;q=80">
          </div>
          <div>
            <h2 class="text-3xl font-semibold text-gray-800">Food</h2>
            <p class="mt-2 text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae dolores deserunt
              ea doloremque natus error, rerum quas odio quaerat nam ex commodi hic, suscipit in a veritatis pariatur
              minus consequuntur!</p>
          </div>
          <div class="flex justify-end mt-4">
            <a href="#" class="text-xl font-medium text-green-500">John Doe</a>
          </div>
        </div>
        <div class="max-w-md p-4 bg-white rounded-lg shadow-lg">
          <div class="flex justify-center -mt-16 md:justify-end">
            <img class="object-cover w-20 h-20 border-2 border-green-500 rounded-full" src="https://cdn.pixabay.com/photo/2018/01/04/21/15/young-3061652__340.jpg">
          </div>
          <div>
            <h2 class="text-3xl font-semibold text-gray-800">Food</h2>
            <p class="mt-2 text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae dolores deserunt
              ea doloremque natus error, rerum quas odio quaerat nam ex commodi hic, suscipit in a veritatis pariatur
              minus consequuntur!</p>
          </div>
          <div class="flex justify-end mt-4">
            <a href="#" class="text-xl font-medium text-green-500">John Doe</a>
          </div>
        </div>
        <div class="max-w-md p-4 bg-white rounded-lg shadow-lg">
          <div class="flex justify-center -mt-16 md:justify-end">
            <img class="object-cover w-20 h-20 border-2 border-green-500 rounded-full" src="https://cdn.pixabay.com/photo/2018/01/18/17/48/purchase-3090818__340.jpg">
          </div>
          <div>
            <h2 class="text-3xl font-semibold text-gray-800">Food</h2>
            <p class="mt-2 text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae dolores deserunt
              ea doloremque natus error, rerum quas odio quaerat nam ex commodi hic, suscipit in a veritatis pariatur
              minus consequuntur!</p>
          </div>
          <div class="flex justify-end mt-4">
            <a href="#" class="text-xl font-medium text-green-500">John Doe</a>
          </div>
        </div>
      </div>
    </section>

    <section class="pt-12 pb-12 bg-red-50">
      <div class="container flex items-center justify-center p-6 mx-auto bg-white shadow-lg sm:p-12 md:w-1/2">
        <div class="w-full">

          <h1 class="mb-4 text-2xl font-bold text-center text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500">
            Order Now FREE AND FAST
          </h1>
          <div class="gap-2 mb-8 lg:flex">
            <div class="w-full">
              <label class="block text-base">
                Your Name
              </label>
              <input type="text" class="w-full px-4 py-2 text-base border rounded-md focus:border-green-400 focus:outline-none focus:ring-1 focus:ring-green-600" placeholder="Your Name">
            </div>
            <div class="w-full">
              <label class="block text-base">
                Your Number
              </label>
              <input type="text" class="w-full px-4 py-2 text-base border rounded-md focus:border-green-400 focus:outline-none focus:ring-1 focus:ring-green-600" placeholder="Your Number">
            </div>
          </div>
          <div class="gap-2 mb-8 lg:flex">
            <div class="w-full">
              <label class="block text-base">
                Table Number
              </label>
              <input type="text" class="w-full px-4 py-2 text-base border rounded-md focus:border-green-400 focus:outline-none focus:ring-1 focus:ring-green-600" placeholder="Enter Table Number 1 to 12">
            </div>
            <div class="w-full">
              <label class="block text-base">
                Booking Date
              </label>
              <input type="date" class="w-full px-4 py-2 text-base border rounded-md focus:border-green-400 focus:outline-none focus:ring-1 focus:ring-green-600" placeholder="Your Number">
            </div>
          </div>
          <div class="">
            <label class="block text-base">
              Your Message
            </label>
            <textarea name="" id="" rows="8" cols="30" class="w-full p-3 text-base border rounded-md focus:border-green-400 focus:outline-none focus:ring-1 focus:ring-green-600" placeholder=""></textarea>
          </div>
          <button class="px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-green-600 border border-transparent rounded-lg active:bg-green-600 hover:bg-green-700 focus:outline-none focus:shadow-outline-green" href="#">
            Book Now
          </button>

        </div>
      </div>
    </section>
    <footer class="bg-gray-800 border-t border-gray-200">
      <div class="container flex flex-wrap items-center justify-center px-4 py-8 mx-auto lg:justify-between">
        <div class="flex flex-wrap justify-center">
          <ul class="flex items-center space-x-4 text-white">
            <li>Home</li>
            <li>About</li>
            <li>Contact</li>
            <li>Terms</li>
          </ul>
        </div>
        <div class="flex justify-center mt-4 lg:mt-0">
          <a>
            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6 text-blue-600" viewBox="0 0 24 24">
              <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
            </svg>
          </a>
          <a class="ml-3">
            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6 text-blue-300" viewBox="0 0 24 24">
              <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
              </path>
            </svg>
          </a>
          <a class="ml-3">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6 text-pink-400" viewBox="0 0 24 24">
              <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
              <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
            </svg>
          </a>
          <a class="ml-3">
            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-6 h-6 text-blue-500" viewBox="0 0 24 24">
              <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
              <circle cx="4" cy="4" r="2" stroke="none"></circle>
            </svg>
          </a>
        </div>
      </div>
    </footer>
  

</body></html>
