<script setup>
import { Link } from "@inertiajs/vue3";
import { ref } from "vue";
import FoodContent from "@/Components/FoodContent.vue";
import DrinkContent from "@/Components/DrinkContent.vue";
import MainLayouts from "@/Layouts/MainLayouts.vue";
import TersediaContent from "@/Components/TersediaContent.vue";

import Kebab1 from "@/Assets/card/kebab.png";
import Kebab2 from "@/Assets/card/kebab2.jpg";
import Kebab3 from "@/Assets/card/kebab3.jpg";
import Kebab4 from "@/Assets/card/kebab4.jpg";

import Drinks1 from "@/Assets/drinks/esteh.jpg";
import Drinks2 from "@/Assets/drinks/esjeruk.jpg";
import Drinks3 from "@/Assets/drinks/eslemon.jpg";
import Drinks4 from "@/Assets/drinks/boba1.jpg";

const Foods = ref([
    {
        img: Kebab1,
        title: "Kebab Muwani Gilani",
        description:
            "Lorem ipsum odor amet, consectetuer adipiscing elit. Montes auctor sagittis hac torquent a nullam mi platea.",
        price: "20.000",
    },
    {
        img: Kebab2,
        title: "Kebab Mas Rehan",
        description:
            "Lorem ipsum odor amet, consectetuer adipiscing elit. Montes auctor sagittis hac torquent a nullam mi platea.",
        price: "17.000",
    },
    {
        img: Kebab3,
        title: "Kebab Ambaffi Wuenak",
        description:
            "Lorem ipsum odor amet, consectetuer adipiscing elit. Montes auctor sagittis hac torquent a nullam mi platea.",
        price: "30.000",
    },
    {
        img: Kebab4,
        title: "Kebab Ngawi blukutuk",
        description:
            "Lorem ipsum odor amet, consectetuer adipiscing elit. Montes auctor sagittis hac torquent a nullam mi platea.",
        price: "50.000",
    },
    {
        img: Kebab1,
        title: "Kebab Muwani Gilani",
        description:
            "Lorem ipsum odor amet, consectetuer adipiscing elit. Montes auctor sagittis hac torquent a nullam mi platea.",
        price: "20.000",
    },
    {
        img: Kebab2,
        title: "Kebab Mas Rehan",
        description:
            "Lorem ipsum odor amet, consectetuer adipiscing elit. Montes auctor sagittis hac torquent a nullam mi platea.",
        price: "17.000",
    },
    {
        img: Kebab3,
        title: "Kebab Ambaffi Wuenak",
        description:
            "Lorem ipsum odor amet, consectetuer adipiscing elit. Montes auctor sagittis hac torquent a nullam mi platea.",
        price: "30.000",
    },
    {
        img: Kebab4,
        title: "Kebab Ngawi blukutuk",
        description:
            "Lorem ipsum odor amet, consectetuer adipiscing elit. Montes auctor sagittis hac torquent a nullam mi platea.",
        price: "50.000",
    },
]);

const Drinks = ref([
    {
        img: Drinks1,
        title: "Es Teh",
        description:
            "Lorem ipsum odor amet, consectetuer adipiscing elit. Montes auctor sagittis hac torquent a nullam mi platea.",
        price: "3.000",
    },
    {
        img: Drinks2,
        title: "Es Jeruk",
        description:
            "Lorem ipsum odor amet, consectetuer adipiscing elit. Montes auctor sagittis hac torquent a nullam mi platea.",
        price: "4.000",
    },
    {
        img: Drinks3,
        title: "Es Lemon",
        description:
            "Lorem ipsum odor amet, consectetuer adipiscing elit. Montes auctor sagittis hac torquent a nullam mi platea.",
        price: "5.000",
    },
    {
        img: Drinks4,
        title: "Booba",
        description:
            "Lorem ipsum odor amet, consectetuer adipiscing elit. Montes auctor sagittis hac torquent a nullam mi platea.",
        price: "15.000",
    },
]);

const getCardsByRange = (start, end) => Cards.value.slice(start, end);
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
                    v-for="(food, index) in Foods"
                    :key="index"
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
                    v-for="(drink, index) in Drinks"
                    :key="index"
                    :drink="drink"
                    loading="lazy"
                />
            </div>
        </section>

        <!-- ENd -->
        <TersediaContent />
    </MainLayouts>
</template>
