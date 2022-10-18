<template>
    <div class="w-full mx-auto lg:mx-0 max-w-[500px] border rounded-lg bg-white h-[500px] xs:h-[700px] lg:h-full drop-shadow-2xl z-10 person" >
        <div class="h-[45%] xs:h-[60%] w-full rounded-t-lg bg-gray-400 px-20 relative overflow-hidden">
            <div class="w-[1000px] h-[500px] absolute bg-gradient-to-r from-gray-500 via-white to-gray-500 rounded-full blur-[25px] opacity-25 left-[-250px]"></div>
            <div class="person__photo-container absolute w-full h-full px-20 left-0 top-0">
                <div class="h-full w-full person__photo">

                </div>
            </div>
        </div>
        <div class="w-full h-[40%] p-4 text-center">
            <div><hr></div>
            <h1 class="mt-2 text-3xl font-extralight">Aleksei Poponin</h1>
            <div class="text-gray-500 font-extralight">Full Stack Web developer</div>
            <div class="w-full flex justify-center gap-4 mt-4">
                <a href="#" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                <a href="#" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                <a href="#" target="_blank"><i class="fa-brands fa-github"></i></a>
                <a href="#" target="_blank"><i class="fa-solid fa-envelope"></i></a>
                <a href="#" target="_blank"><i class="fa-solid fa-mobile-button"></i></a>
            </div>
        </div>
    </div>
</template>
