<script setup>
import { Link } from "@inertiajs/vue3";
import { ref } from "vue";
import FoodContent from "@/Components/FoodContent.vue";
import DrinkContent from "@/Components/DrinkContent.vue";
import MainLayouts from "@/Layouts/MainLayouts.vue";
import TersediaContent from "@/Components/TersediaContent.vue";

defineProps({
    drinks: {
        type: Array,
        required: true,
    },
    foods: {
        type: Array,
        required: true,
    },  
});
</script>

<template>
    <MainLayouts>
        <!-- BANNER -->
        <section class="pt-[80px] z-0">
            <div class="relative">
                <div class="h-[20rem] w-full inset-0">
                    <div class="absolute inset-0 bg-black opacity-55"></div>
                    <img
                        src="@/Assets/background.jpg"
                        alt="backgorund"
                        class="object-cover h-full w-full z-0"
                    />
                </div>
                <div
                    class="absolute flex inset-0 items-center justify-center w-full font-raleway text-[5rem] text-white font-bold"
                >
                    OUR MENU
                </div>
            </div>
        </section>

        <!-- RED -->
        <section>
            <div class="bg-red-600 py-3"></div>
        </section>

        <!-- Title -->
        <section>
            <div class="text-center text-3xl font-montserrat pt-28 pb-12">
                Menu
                <span class="text-red-600 font-bold"> Kebab </span>
            </div>
        </section>

        <!-- Kebab -->
        <section class="px-24 pt-12 pb-10">
            <div class="grid grid-cols-4 gap-12">
                <FoodContent
                    v-for="food in foods"
                    :key="food.id"
                    :food="food"
                    loading="lazy"
                />
            </div>
        </section>

        <!-- Title -->
        <section>
            <div class="text-center text-3xl font-montserrat pt-28 pb-12">
                Menu
                <span class="text-red-600 font-bold"> Minuman </span>
            </div>
        </section>
        <!-- Drinks -->
        <section class="px-24 pb-40">
            <div class="grid grid-cols-4 gap-12">
                <DrinkContent
                    v-for="drink in drinks"
                    :key="drink.id"
                    :drink="drink"
                    loading="lazy"
                />
            </div>
        </section>

        <!-- ENd -->
        <TersediaContent />
    </MainLayouts>
</template>
