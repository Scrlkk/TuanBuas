<script setup>
import { Link } from "@inertiajs/vue3";
const Links = [
    { text: "Home", href: "/" },
    { text: "About Us", href: "/#aboutUs" },
    { text: "Menu", href: "/menu" },
    { text: "Outlet", href: "/#outlet" },
    { text: "Gallery", href: "/#gallery" },
];
</script>

<template>
    <section
        class="px-24 flex items-center justify-between fixed bg-[#F6F7F8] w-full z-10"
    >
        <!-- LOGO -->
        <div class="flex items-center">
            <img
                src="@/Assets/svg/Kebabpaparaffi.svg"
                alt="logo"
                class="h-20 w-20"
            />
            <div
                class="font-montserrat tracking-tighter font-bold leading-none"
            >
                <h1 class="text-red-600">Kebabpaparaffi</h1>
                <p>Authenticnya Kebab</p>
            </div>
        </div>

        <!-- Navigation -->
        <div class="flex gap-6 text-red-600 font-quicksand font-bold">
            <Link
                v-for="(link, index) in Links"
                :key="index"
                :href="link.href"
                class="hover:text-red-700 transition duration-300"
            >
                {{ link.text }}
            </Link>
        </div>

        <!-- ORDER -->
        <a
            href="https://gofood.co.id/search?q=Kebab"
            target="_blank"
            rel="noopener noreferrer"
            className="p-5 py-4 px-8 bg-red-600 rounded-[26px] font-quicksand font-bold text-white hover:bg-green-500 hover:scale-95 transition duration-150 ease-in-out"
        >
            ORDER HERE
        </a>
    </section>
</template>
