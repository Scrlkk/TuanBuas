<script setup>
import { Link } from "@inertiajs/vue3";
import MainLayouts from "@/Layouts/MainLayouts.vue";
import AboutUs from "@/Assets/AboutUs.avif";
import { ref } from "vue";
import CardContent from "@/Components/CardContent.vue";
import TestiContent from "@/Components/TestiContent.vue";
import TersediaContent from "@/Components/TersediaContent.vue";

import Kebab1 from "@/Assets/card/kebab.png";
import Kebab2 from "@/Assets/card/kebab2.jpg";
import Kebab3 from "@/Assets/card/kebab3.jpg";
import Kebab4 from "@/Assets/card/kebab4.jpg";

import Testi1 from "@/Assets/testi/tsaqip.jpg";
import Testi2 from "@/Assets/testi/jul.jpg";
import Testi3 from "@/Assets/testi/padil.jpg";
import Testi4 from "@/Assets/testi/pael.jpg";

import star from "@/Assets/star.svg";

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
]);

const Testi = ref([
    {
        img: Testi1,
        desc: "HELO GES!!! Kebabnya juara banget! Daging empuk dan bumbu meresap sempurna. Kebab ini udah langganan dari dulu dan ga pernah kecewa.",
        name: "Naufal Tsaqif",
        job: "Food Blogger",
    },
    {
        img: Testi2,
        desc: "Saya selaku penjaga sekolah sebelah telah merasakan nikmat kebab ini. Porsinya juga pas. Selalu jadi pilihan utama setiap kali ingin makan kebab.",
        name: "Teguh Surya",
        job: "Penjaga Sekolah",
    },
    {
        img: Testi3,
        desc: "Kebab favorit saya! Dagingnya terasa segar dan bumbunya pas, dari kecil sampai sekarang besar, ini tempat yang wajib dikunjungi untuk pencinta kebab.",
        name: "Khairuddin",
        job: "Anak Pak RT",
    },
]);
</script>

<template>
    <MainLayouts>
        <!-- HERO -->
        <section>
            <div class="flex w-full">
                <div class="flex flex-col relative w-full pt-[80px] z-0">
                    <div
                        class="absolute inset-0 z-10"
                        style="
                            background: radial-gradient(
                                circle at 200% 50%,
                                rgba(0, 0, 0, 0) 50%,
                                rgba(0, 0, 0, 1) 100%
                            );
                        "
                    ></div>
                    <img
                        loading="lazy"
                        src="@/Assets/background.jpg"
                        alt="background hero"
                        class="w-full h-[662px] object-cover z-0"
                    />
                    <div class="absolute flex inset-0 items-center z-10 px-20">
                        <div
                            class="flex flex-col text-white text-6xl leading-tight font-montserrat font-bold tracking-tighter mt-20"
                        >
                            <h2
                                class="text-2xl tracking-wide font-normal italic"
                            >
                                Selamat datang di,
                            </h2>
                            <h1 class="pt-5 leading-none -ml-[3px]">
                                Kebabpaparaffi
                            </h1>
                            <h2 class="text-2xl tracking-normal mb-6">
                                Harga Terjangkau, Rasa Teristimewa
                            </h2>
                            <p
                                class="text-sm font-light font-quicksand tracking-normal leading-normal max-w-xl"
                            >
                                <span class="font-bold">KebabPapraffi</span>
                                menyajikan kebab dengan cita rasa autentik,
                                menggunakan bahan segar dan resep teruji.
                                Nikmati daging panggang gurih, roti lembut, dan
                                berbagai topping menggugah selera. Dengan harga
                                terjangkau, setiap gigitan di KebabPapraffi
                                adalah pengalaman rasa yang tak terlupakan.
                            </p>
                            <div class="pt-7">
                                <Link href="/menu">
                                    <div
                                        class="bg-red-600 py-3 text-xl p-5 max-w-[212px] px-[4rem] flex items-center bg- tracking-normal gap-1 hover:bg-red-700 transition ease-in-out"
                                    >
                                        Menu
                                        <div class="mt-[1px]">
                                            <svg
                                                width="24"
                                                height="24"
                                                viewBox="0 0 24 24"
                                                fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                            >
                                                <path
                                                    d="M18.0001 11.9999C17.9952 11.4738 17.7832 10.9708 17.4101 10.5999L13.1201 6.29995C12.9327 6.1137 12.6792 6.00916 12.4151 6.00916C12.1509 6.00916 11.8974 6.1137 11.7101 6.29995C11.6163 6.39291 11.5419 6.50351 11.4912 6.62537C11.4404 6.74723 11.4143 6.87794 11.4143 7.00995C11.4143 7.14196 11.4404 7.27266 11.4912 7.39452C11.5419 7.51638 11.6163 7.62698 11.7101 7.71995L15.0001 10.9999H5.00006C4.73484 10.9999 4.48049 11.1053 4.29295 11.2928C4.10542 11.4804 4.00006 11.7347 4.00006 11.9999C4.00006 12.2652 4.10542 12.5195 4.29295 12.707C4.48049 12.8946 4.73484 12.9999 5.00006 12.9999H15.0001L11.7101 16.2899C11.5218 16.4769 11.4154 16.731 11.4145 16.9964C11.4136 17.2618 11.5181 17.5166 11.7051 17.7049C11.892 17.8932 12.1462 17.9996 12.4115 18.0005C12.6769 18.0014 12.9318 17.8969 13.1201 17.7099L17.4101 13.4099C17.7856 13.0366 17.9978 12.5295 18.0001 11.9999Z"
                                                    fill="#FFFFFF"
                                                />
                                            </svg>
                                        </div>
                                    </div>
                                </Link>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- TITLE -->
        <section>
            <div class="text-center pt-60 pb-40 text-2xl font-montserrat">
                <Link href="/">
                    <span class="text-red-500 font-bold">Kebabpaparaffi </span>
                </Link>
                is the one with authentic taste
            </div>
        </section>

        <!-- ABOUTUS -->
        <section id="aboutUs">
            <div class="mx-[60px] max-w-5xl pb-36">
                <div class="flex relative justify-center items-center">
                    <div class="w-[40rem]">
                        <img
                            loading="lazy"
                            :src="AboutUs"
                            alt="kebabpaparaffi"
                            class="object-cover w-full h-full"
                        />
                    </div>

                    <div
                        class="group absolute font max-w-md bg-gray-200 p-12 -right-44 font-quicksand hover:bg-red-600 hover:text-white hover:scale-110 transition duration-300 ease-in-out"
                    >
                        <h1 class="font-bold text-xl">About Us,</h1>
                        <h1 class="italic leading-snug py-4">
                            “impian kami adalah menyajikan kebab berkualitas
                            tinggi, yang dibuat dengan bahan-bahan lokal terbaik
                            dan segar, dipadukan dengan cita rasa khas yang
                            menggugah selera, dengan komitmen kami adalah
                            memberikan pengalaman kuliner yang istimewa bagi
                            pelanggan kami di seluruh Wonogiri"
                        </h1>
                        <h1 class="not-italic font-medium">
                            - CEO
                            <span
                                class="pl-0.5 font-montserrat text-red-600 group-hover:text-white transition duration-300 ease-in-out"
                            >
                                Kebabpaparaffi
                            </span>
                        </h1>
                    </div>
                </div>
            </div>
        </section>

        <!-- MENU -->
        <section class="px-24">
            <!-- TITLE -->
            <div class="text-center pt-20 pb-16 text-2xl font-montserrat">
                Our
                <span class="text-red-600 font-bold"> Best Seller </span>
            </div>

            <div
                class="flex w-full justify-end text-red-600 font-montserrat tracking-tight pb-5"
            >
                <Link href="/menu">
                    <div>View All</div>
                </Link>
            </div>

            <!-- CARD -->
            <div class="grid grid-cols-4 gap-10 pb-12">
                <CardContent
                    v-for="(card, index) in Cards"
                    :key="index"
                    :card="card"
                    loading="lazy"
                />
            </div>
        </section>

        <!-- Mengapa Kami? -->
        <section class="px-24 mt-12 pt-24 pb-24">
            <!-- TITLE -->
            <div class="text-center font-montserrat text-2xl">
                Mengapa
                <span class="text-red-600 font-bold ml-0.5">
                    Memilih Kami?
                </span>
                <h1 class="text-lg pt-2 font-raleway">
                    <span class="text-red-600 font-bold">Kualitas</span>

                    dan
                    <span class="text-red-600 font-bold">kepuasan</span>
                    pelanggan adalah prioritas kami
                </h1>
            </div>

            <!-- BOX -->
            <div class="pt-10">
                <div
                    class="grid grid-cols-3 justify-items-center w-full gap-14 font-montserrat"
                >
                    <!-- 1 -->
                    <div
                        class="group outline outline-2 w-full rounded-lg text-center py-8 px-8 hover:bg-red-600 hover:text-white hover:scale-110 hover:outline-none transition duration-200 ease-in-out"
                    >
                        <div class="flex w-full justify-center pb-3">
                            <div
                                class="bg-red-600 rounded-full w-16 h-16 justify-items-center group-hover:bg-white transition duration-200 ease-in-out"
                            >
                                <svg
                                    class="ml-0.5 stroke-white group-hover:stroke-red-600 transition duration-200 ease-in-out"
                                    width="44"
                                    height=""
                                    viewBox="0 0 49 49"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        clip-rule="evenodd"
                                        d="M44.0257 27.7C41.4377 31.51 38.8917 32.308 35.7497 33.291C33.9037 33.869 31.8507 34.511 29.4617 35.869C27.5217 36.971 25.7757 38.302 24.1047 39.576C19.7467 42.898 15.9017 45.83 10.4497 43.288C2.90573 39.77 1.32573 29.354 8.72373 16.556C16.1207 3.75999 27.7037 1.76599 36.4457 6.80699C45.1877 11.848 48.2767 20.346 44.0257 27.7Z"
                                        stroke=""
                                        stroke-width="3"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    />
                                    <path
                                        fill-rule="evenodd"
                                        clip-rule="evenodd"
                                        d="M22.4988 34.545C23.8458 33.53 25.4148 32.369 27.1838 31.373C29.6608 29.978 32.0098 29.251 33.6738 28.737C34.1598 28.587 34.5868 28.454 34.9418 28.328C36.4118 27.808 37.5078 27.234 38.7848 25.408C40.0848 23.114 40.2208 20.764 39.4148 18.564C38.5748 16.27 36.6118 13.898 33.3258 12.019C30.2408 10.255 26.7558 9.766 23.4238 10.753C20.1008 11.738 16.5808 14.3 13.6838 19.27C10.6538 24.47 9.68179 28.824 9.96179 31.948C10.2318 34.945 11.6108 36.796 13.6418 37.736C14.7388 38.243 15.5498 38.307 16.2268 38.214C16.9668 38.113 17.8028 37.787 18.8748 37.136C19.8648 36.535 20.8578 35.786 22.0718 34.868L22.4988 34.545Z"
                                        stroke=""
                                        stroke-width="3"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    />
                                    <path
                                        d="M29.9158 24.25C30.7114 24.25 31.4745 23.9339 32.0371 23.3713C32.5997 22.8087 32.9158 22.0456 32.9158 21.25C32.9158 20.4544 32.5997 19.6913 32.0371 19.1287C31.4745 18.5661 30.7114 18.25 29.9158 18.25C29.1201 18.25 28.3571 18.5661 27.7945 19.1287C27.2318 19.6913 26.9158 20.4544 26.9158 21.25C26.9158 22.0456 27.2318 22.8087 27.7945 23.3713C28.3571 23.9339 29.1201 24.25 29.9158 24.25Z"
                                        stroke=""
                                        stroke-width="3"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    />
                                </svg>
                            </div>
                        </div>
                        <h1
                            class="text-red-600 pb-2 font-bold tracking-tight group-hover:text-white transition duration-200 ease-in-out"
                        >
                            Bahan Premium
                        </h1>
                        <p class="tracking-tight">
                            Menggunakan bahan-bahan lokal yang segar dan
                            berkualitas tinggi
                        </p>
                    </div>

                    <!-- 2 -->
                    <div
                        class="group outline outline-2 w-full rounded-lg text-center py-8 px-8 hover:bg-red-600 hover:text-white hover:scale-110 hover:outline-none transition duration-200 ease-in-out"
                    >
                        <div class="flex w-full justify-center pb-3">
                            <div
                                class="bg-red-600 rounded-full w-16 h-16 justify-items-center group-hover:bg-white transition duration-200 ease-in-out"
                            >
                                <svg
                                    class="-mt-0.5 stroke-white group-hover:stroke-red-600 transition duration-200 ease-in-out"
                                    width="44"
                                    height=""
                                    viewBox="0 0 49 49"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        d="M4.91577 31.137C4.91577 20.647 12.8358 12.337 23.3258 12.256C24.3858 12.248 25.4458 12.248 26.5058 12.256C36.9958 12.336 44.9158 20.647 44.9158 31.137V31.251C44.9162 31.776 44.8131 32.296 44.6125 32.7811C44.4118 33.2663 44.1175 33.7072 43.7464 34.0785C43.3753 34.4499 42.9347 34.7445 42.4497 34.9455C41.9647 35.1465 41.4448 35.25 40.9198 35.25H24.9158H8.91177C8.38667 35.25 7.86672 35.1465 7.38165 34.9454C6.89657 34.7444 6.45588 34.4497 6.08476 34.0782C5.71364 33.7067 5.41938 33.2657 5.2188 32.7804C5.01822 32.2952 4.91525 31.7751 4.91577 31.25V31.137Z"
                                        stroke=""
                                        stroke-width="3"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    />
                                    <path
                                        d="M22.2188 12.296C21.4595 11.0951 20.8322 9.81566 20.3478 8.48C20.0598 7.686 20.4068 6.845 21.2248 6.637C22.0158 6.435 23.2058 6.25 24.9168 6.25C26.6288 6.25 27.8188 6.435 28.6078 6.637C29.4268 6.845 29.7728 7.686 29.4858 8.48C29.0014 9.81568 28.3741 11.0951 27.6148 12.296"
                                        stroke=""
                                        stroke-width="3"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    />
                                    <path
                                        d="M4.01174 37.885C4.24874 40.373 6.50775 41.959 9.00574 42.041C12.1407 42.143 17.2497 42.25 24.9157 42.25C32.5807 42.25 37.6897 42.143 40.8247 42.04C43.3227 41.959 45.5817 40.373 45.8187 37.885C45.9387 36.633 44.9497 35.582 43.6927 35.53C40.8617 35.414 35.0717 35.25 24.9157 35.25C14.7597 35.25 8.96974 35.414 6.13774 35.53C4.88174 35.582 3.89174 36.633 4.01174 37.885Z"
                                        stroke=""
                                        stroke-width="3"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    />
                                    <path
                                        d="M26.4158 17.75C31.2158 17.785 35.2388 20.164 37.4158 23.75"
                                        stroke=""
                                        stroke-width="3"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    />
                                </svg>
                            </div>
                        </div>
                        <h1
                            class="text-red-600 pb-2 font-bold tracking-tight group-hover:text-white transition duration-200 ease-in-out"
                        >
                            Pelayanan Eksklusif
                        </h1>
                        <p class="tracking-tight">
                            Nikmati pelayanan ang istimewa dengan momen kuliner
                            yang luarbiasa
                        </p>
                    </div>

                    <!-- 3 -->
                    <div
                        class="group outline outline-2 w-full rounded-lg text-center py-8 px-8 hover:bg-red-600 hover:text-white hover:scale-110 hover:outline-none transition duration-200 ease-in-out"
                    >
                        <div class="flex w-full justify-center pb-3">
                            <div
                                class="bg-red-600 rounded-full w-16 h-16 justify-items-center group-hover:bg-white transition duration-200 ease-in-out"
                            >
                                <svg
                                    class="stroke-white group-hover:stroke-red-600 transition duration-200 ease-in-out"
                                    width="44"
                                    height=""
                                    viewBox="0 0 49 49"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        d="M32.4838 7.377C31.6688 6.11038 30.5488 5.06873 29.2265 4.34765C27.9042 3.62656 26.4219 3.24913 24.9158 3.25C23.4096 3.24913 21.9274 3.62656 20.6051 4.34765C19.2828 5.06873 18.1627 6.11038 17.3478 7.377C16.4632 6.55956 15.4054 5.95243 14.2533 5.60089C13.1013 5.24935 11.8848 5.16248 10.6945 5.34676C9.50418 5.53104 8.37087 5.98172 7.37907 6.66517C6.38727 7.34861 5.5626 8.24719 4.96658 9.29386C4.37056 10.3405 4.01857 11.5083 3.93688 12.71C3.85519 13.9117 4.0459 15.1163 4.49478 16.234C4.94366 17.3517 5.63914 18.3536 6.52931 19.165C7.41949 19.9764 8.48139 20.5763 9.63579 20.92C10.1999 28.1188 10.9268 35.304 11.8158 42.47C11.9858 43.83 13.0668 44.87 14.4358 44.958C16.5218 45.092 20.0158 45.25 24.9158 45.25C29.8158 45.25 33.3098 45.092 35.3958 44.957C36.7648 44.869 37.8458 43.829 38.0158 42.469C38.9048 35.3034 39.6316 28.1185 40.1958 20.92C41.3502 20.5763 42.4121 19.9764 43.3023 19.165C44.1924 18.3536 44.8879 17.3517 45.3368 16.234C45.7857 15.1163 45.9764 13.9117 45.8947 12.71C45.813 11.5083 45.461 10.3405 44.865 9.29386C44.269 8.24719 43.4443 7.34861 42.4525 6.66517C41.4607 5.98172 40.3274 5.53104 39.1371 5.34676C37.9468 5.16248 36.7303 5.24935 35.5782 5.60089C34.4262 5.95243 33.3684 6.55956 32.4838 7.377Z"
                                        stroke=""
                                        stroke-width="3"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    />
                                    <path
                                        d="M38.6698 37.613C36.1128 37.48 31.8338 37.348 24.9168 37.348C17.9988 37.348 13.7198 37.48 11.1638 37.613"
                                        stroke=""
                                        stroke-width="3"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    />
                                    <path
                                        d="M19.9158 21.25L20.9158 29.25"
                                        stroke=""
                                        stroke-width="3"
                                        stroke-linecap="round"
                                    />
                                    <path
                                        d="M29.9158 21.25L28.9158 29.25"
                                        stroke=""
                                        stroke-width="3"
                                        stroke-linecap="round"
                                    />
                                </svg>
                            </div>
                        </div>
                        <h1
                            class="text-red-600 pb-2 font-bold tracking-tight group-hover:text-white transition duration-200 ease-in-out"
                        >
                            Cita Rasa Authentic
                        </h1>
                        <p class="tracking-tight">
                            Rasakan cita rasa yang memanjakan lidah di setiap
                            sajiannya
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- OUTLET -->
        <section id="outlet" class="pt-20">
            <div class="flex w-full bg-red-600 h-[27rem] justify-around">
                <div
                    class="px-24 pt-10 mt-9 font-bold text-6xl text-white font-raleway"
                >
                    Jumpai Oulet Kami di,
                    <div class="flex gap-1.5">
                        Seluruh
                        <p class="font-montserrat italic under">Wonogiri</p>
                        <div class="flex items-center rotate-12 pl-1.5">
                            <svg
                                width="44"
                                height="44"
                                viewBox="0 0 24 24"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <g clip-path="url(#clip0_406_1953)">
                                    <path
                                        d="M11.9999 0.0424805C9.35386 0.0453916 6.817 1.09776 4.94586 2.96871C3.07472 4.83966 2.0221 7.37642 2.01892 10.0225C2.01892 12.5925 4.00892 16.6145 7.93392 21.9765C8.40118 22.6166 9.01298 23.1374 9.71952 23.4964C10.4261 23.8554 11.2074 24.0425 11.9999 24.0425C12.7924 24.0425 13.5738 23.8554 14.2803 23.4964C14.9869 23.1374 15.5987 22.6166 16.0659 21.9765C19.9909 16.6145 21.9809 12.5925 21.9809 10.0225C21.9777 7.37642 20.9251 4.83966 19.054 2.96871C17.1828 1.09776 14.646 0.0453916 11.9999 0.0424805V0.0424805ZM11.9999 14.0005C11.2088 14.0005 10.4354 13.7659 9.77764 13.3264C9.11984 12.8868 8.60715 12.2621 8.3044 11.5312C8.00165 10.8003 7.92244 9.99604 8.07678 9.22012C8.23112 8.4442 8.61208 7.73146 9.17149 7.17205C9.7309 6.61264 10.4436 6.23168 11.2196 6.07734C11.9955 5.923 12.7998 6.00221 13.5307 6.30496C14.2616 6.60771 14.8863 7.1204 15.3258 7.7782C15.7653 8.436 15.9999 9.20936 15.9999 10.0005C15.9999 11.0613 15.5785 12.0788 14.8283 12.8289C14.0782 13.5791 13.0608 14.0005 11.9999 14.0005Z"
                                        fill="white"
                                    />
                                </g>
                                <defs>
                                    <clipPath id="clip0_406_1953">
                                        <rect
                                            width="24"
                                            height="24"
                                            fill="white"
                                        />
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                    </div>
                    <h1
                        class="pt-4 pb-5 text-xl font-medium font-montserrat tracking-tighter max-w-xl"
                    >
                        Jumpai outlet kami yang tersebar di seluruh wilayah
                        Wonogiri. Temukan produk terbaik dengan mudah dekat
                        Anda!
                    </h1>

                    <a
                        href="https://www.google.com/maps/search/kebabpaparffi/@-7.7978506,110.9129368,13.87z?entry=ttu&g_ep=EgoyMDI0MTExOS4yIKXMDSoASAFQAw%3D%3D"
                        target="_blank"
                        rel="noopener noreferrer"
                    >
                        <button
                            class="font-montserrat bg-white text-red-600 text-xl py-3 px-12 hover:scale-95 hover:bg-gray-200 transition duration-150 ease-in-out"
                        >
                            Lokasi Kami &gt;
                        </button>
                    </a>
                </div>
                <div class="w-2/6 mr-14">
                    <img
                        src="@/Assets/Menu.png"
                        alt="kebabpaparffi"
                        class="object-cover w-full h-full"
                    />
                </div>
            </div>
        </section>

        <!-- TESTI -->
        <section id="gallery" class="px-20 pt-40 pb-24">
            <div class="text-center pb-12">
                <h1 class="font-montserrat text-2xl">
                    Apa Kata
                    <span class="text-red-600 font-bold"> Mereka </span>
                </h1>
                <div class="flex justify-center">
                    <p
                        class="font-raleway text-xl max-w-lg tracking-tight pt-2 pb-12"
                    >
                        Penglaman pelanggan setia kami pada kepuasan mereka
                    </p>
                </div>
            </div>

            <!-- CONTAINER -->
            <div class="grid grid-cols-3 justify-items-center gap-10">
                <TestiContent
                    v-for="(testi, index) in Testi"
                    :key="index"
                    :testi="testi"
                    loading="lazy"
                />
            </div>
        </section>

        <!-- End -->
        <TersediaContent />
    </MainLayouts>
</template>

<!-- TEST -->
<!-- bg-[#F5F7F8] -->
