Vue.component('card-learn-nav', {
    props: [
        'title',
        'desc',
        'img'
    ],
    template : 
        <div class="m-3 p-3 rounded shadow-md text-gray-500 text-xs card-learn-nav">
                <div class="flex flex-row">
                    <div class="basis-1/4">
                        <img class=" mx-3 w-12 h-12" src="props.img" alt="dollar" />
                    </div>
                    <div class="basis-3/4 px-6 text-left">
                        <h1 class="font-medium text-blue-500 text-xl">{{ props.title }}</h1>
                        <p class="text-xs text-gray-500 py-1">{{ props.desc }}</p>
                    </div>
                </div>
            </div>
})
new Vue({ el: '#components-demo' })
$("#open-mobile-learn-nav").click(() => {
    $("#main-nav").addClass("hidden");
    $("#navbar-learn").removeClass("hidden");
})