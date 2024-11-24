<script setup>
import { Link } from "@inertiajs/vue3";
import { ref } from "vue";
import CardContent from "@/Components/CardContent.vue";
import MainLayouts from "@/Layouts/MainLayouts.vue";
import TersediaContent from "@/Components/TersediaContent.vue";

import Kebab1 from "@/Assets/card/kebab.png";
import Kebab2 from "@/Assets/card/kebab2.jpg";
import Kebab3 from "@/Assets/card/kebab3.jpg";
import Kebab4 from "@/Assets/card/kebab4.jpg";

const Cards = ref([
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
                    class="absolute flex inset-0 items-center justify-center w-full font-raleway text-6xl text-white font-bold"
                >
                    OUR MENU
                </div>
            </div>
        </section>

        <!-- TITLE -->
        <section>
            <div class="bg-red-600 py-3"></div>
        </section>

        <!-- Content -->
        <section class="px-24 pt-32 pb-40">
            <div class="grid grid-cols-4 gap-12">
                <CardContent
                    v-for="(card, index) in Cards"
                    :key="index"
                    :card="card"
                    loading="lazy"
                />
            </div>
        </section>

        <!-- ENd -->
        <TersediaContent />
    </MainLayouts>
</template>
