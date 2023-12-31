<!-- Section-of-  -->

<section id="homeServices" class="bg-center bg-no-repeat bg-cover py-16" style="background-image: url(images/demo/contact.jpg)">
    <div class="container mx-auto py-20 text-white">
        <div class="text-center font-bold">
            <h6 class="text-blue-700 font-semibold">Find Me</h6>
            <h1 class="uppercase text-4xl text-white font-semibold mb-12">contact me now</h1>
        </div>
        <form method="get" class="grid grid-cols-12 gap-3 justify-center items-center">
            <div class="col-span-full sm:col-span-6">
                <div class="mb-3">
                    <span id="name-error"></span>
                    <input type="text" onkeyup="key(this)" name="name" class="border w-full bg-transparent" placeholder="Type Your name" value="<?php echo($old['name'])?? '' ?>" />
					<div class="text-sm text-rose-600 font-bold"><?php echo($errors['name'])?? '' ?></div>
                </div>
                <div class="mb-3">
                    <span id=""></span>
                    <input type="email" name="email" class="w-full border bg-transparent" placeholder="Type Email Address" value="<?php echo($old['email'])?? '' ?>"/>
					<div class="text-sm text-rose-600 font-bold"><?php echo($errors['email'])?? '' ?></div>
                </div>
                <div class="mb-3">
                    <span id="phone-error"></span>
                    <input type="text" name="phone" class="w-full border bg-transparent" placeholder="Type Your Phone Number" value="<?php echo($old['phone'])?? '' ?>"/>
					
					<div class="text-sm text-rose-600 font-bold"><?php echo($errors['phone'])?? '' ?></div>
                </div>
            </div>
            <div class="col-span-full sm:col-span-6">
                <div class="mb-3">
                    <span id="massage-error"></span>
                    <textarea id="uppertext" name="message" class="w-full border bg-transparent" placeholder="Type Your message Here" rows="4"><?php echo($old['message'])?? '' ?></textarea>
                    <span id="showlength" style="color: white; float: right"></span>
					<div class="text-sm text-rose-600 font-bold"><?php echo($errors['message'])?? '' ?></div>
                </div>
            </div>
            <div class="col-span-full text-center ">
                <button type="submit" name="subContact" class="px-5 py-1 uppercase rounded-md text-white  bg-gradient-to-r from-blue-500 to-green-600 hover:bg-gradient-to-r hover:from-green-400 hover:to-blue-800 transition-all duration-700">Submit</button>
            </div>
        </form>
        <!-- Address Part -->
        <div id="address" class="grid grid-cols-12 justify-center items-center text-white pt-12" >
            <div class=" col-span-full sm:col-span-8 md:col-span-4 text-center">
                <h1 class="text-yellow-400 text-4xl mb-3"><i class="fas fa-map-marked-alt"></i></h1>
                <p class="text-xl">
                    Address <br />
                    Natore, Rajshahi, Bangladesh
                </p>
            </div>
            <div class=" col-span-full sm:col-span-8 md:col-span-4 text-center">
                <h1 class="text-green-400 text-4xl mb-3"><i class="far fa-envelope"></i></h1>
                <p class="text-xl">
                    Email <br />
                    dmaghatail@gmail.com
                </p>
            </div>
            <div class=" col-span-full sm:col-span-8 md:col-span-4 text-center">
                <h1 class="text-red-500 text-4xl mb-3"><i class="fas fa-mobile-alt"></i></h1>
                <p class="text-xl">
                    Phone <br />
                    +880 1741-815293
                </p>
            </div>
        </div>
    </div>
</section>