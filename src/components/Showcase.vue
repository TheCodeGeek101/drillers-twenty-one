<template>
<div>
    <section class="showcase bg-fixed bg-cover">
        <div class="container">
                <div class= "text" >
                     <h2 class= "heading-primary font-bold text-4xl font-custom main-header  uppercase">
                        <span class="heading-primary-main">Music is the best solution</span>
                        <span class="heading-primary-sub">to any problem</span>
                         </h2>
                
					 <div class="flex flex-col mt-4 sm:flex-row sm:items-center sm:justify-center">
         

                <button class="w-full px-5 py-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-blue-600 rounded-md sm:mx-2 sm:order-2 sm:w-auto hover:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">Get started</button>
            </div>
				</div>
        </div>
    </section>
</div>
</template>

<script>


</script>

<style scope>
	.text{
	position:absolute;
	 left:30%; 
	top:55%;
	}
.main-header{
	display:block;
	color:transparent;
    -webkit-background-clip:text;
    background-image: linear-gradient(to bottom, white, transparent);
	text-align: center;
    backface-visibility: hidden;
}

.showcase{
        background-image: linear-gradient(to bottom,black,transparent),
        url('img/8.jpg');
        height:650px;
    }
    .heading-primary{
        display:block;
    }
    .heading-primary-main{
        display:block;
    }
    .heading-primary-sub{
        display:block;
    }

@media screen and (max-width: 990px){


    .showcase{
        background-position:top;
        background-size:cover;
       height: 600px;
        margin:0;
        width:100%;
        position: relative;
    }
    .custom{
        font-size:14px;
        font-weight:0;
        position:absolute;
        left:2%;
    }
    .btn-custom{
        padding:2px;
        display:none;
        animation:none;
    }
      .heading-primary{
        display:block;
        position: absolute;
        /* color: white; */
        left:17.5%;
        font-size: 19px;
        top:13%;
        text-align: center;
        backface-visibility: hidden;
      }

.heading-primary-main{
    display: block;
    font-size: 22px;
    letter-spacing: 4px;
    color:transparent;
    /* font-family: w3-Cursive; */
    -webkit-background-clip: text;
    background-image: linear-gradient(to bottom,gold,transparent);
    text-transform: uppercase;
    /* animation-name: moveInLeft; */
    /* animation-duration: 5s; */
    /* animation-delay: 1s; */
    /* animation-timing-function: ease-out; */
  }
  .heading-primary-sub{
    display: block;
    /* font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; */
    font-size: 22px;
   /* letter-spacing: 11px; */
    /* text-transform: uppercase; */
    /* animation-name: moveInRight; */
    /* animation-duration: 5s; */
    /* color: gold; */
    /* animation-delay: 1s; */
    /* animation-timing-function: ease-out; */
  }


}


</style>