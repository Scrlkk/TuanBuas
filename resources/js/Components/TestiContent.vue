<script setup>
defineProps({
    testi: {
        type: Object,
        required: true,
    },
});
</script>

<template>
    <!-- 1 -->
    <div
        class="relative group shadow-md outline outline-4 bg-gray-100 outline-red-600 rounded-[1rem] border-red-600 w-[427px] h-[320px] text-center hover:outline-none hover:bg-red-600 hover:scale-110 hover:text-[#FFCB45] hover:shadow-2xl transition duration-300 ease-in-out"
    >
        <!-- FOTO -->
        <div
            class="absolute p-5 bg-red-600 w-24 h-24 left-[166px] -top-8 rounded-full group-hover:bg-[#FFCB45] transition duration-300 ease-in-out"
        >
            <div class="flex scale-150 overflow-hidden rounded-full">
                <img
                    :src="testi.img"
                    class="w-full h-full translate-y-[9px] scale-150"
                />
            </div>
        </div>
        <!-- BINTANG -->
        <div class="flex pt-20 justify-center">
            <svg width="126" height="17" viewBox="0 0 126 17" fill="none">
                <path
                    d="M9 0L12.0593 5.21592L18 6.49342L13.95 10.9945L14.5623 17L9 14.5659L3.43769 17L4.05 10.9945L0 6.49342L5.94073 5.21592L9 0Z"
                    fill="#FFCB45"
                />
                <path
                    d="M36 0L39.0593 5.21592L45 6.49342L40.95 10.9945L41.5623 17L36 14.5659L30.4377 17L31.05 10.9945L27 6.49342L32.9407 5.21592L36 0Z"
                    fill="#FFCB45"
                />
                <path
                    d="M63 0L66.0593 5.21592L72 6.49342L67.95 10.9945L68.5623 17L63 14.5659L57.4377 17L58.05 10.9945L54 6.49342L59.9407 5.21592L63 0Z"
                    fill="#FFCB45"
                />
                <path
                    d="M90 0L93.0593 5.21592L99 6.49342L94.95 10.9945L95.5623 17L90 14.5659L84.4377 17L85.05 10.9945L81 6.49342L86.9407 5.21592L90 0Z"
                    fill="#FFCB45"
                />
                <path
                    d="M117 0L120.059 5.21592L126 6.49342L121.95 10.9945L122.562 17L117 14.5659L111.438 17L112.05 10.9945L108 6.49342L113.941 5.21592L117 0Z"
                    fill="#FFCB45"
                />
            </svg>
        </div>

        <!-- DESC -->
        <div
            class="px-10 pt-4 pb-5 font-montserrat italic overflow-hidden h-[140px]"
        >
            "{{ testi.desc }}"
        </div>

        <!-- NAMA -->
        <div
            class="font-raleway font-bold text-red-600 text-xl pt-1 group-hover:text-[#FFCB45] transition duration-300 ease-in-out"
        >
            {{ testi.name }}
        </div>

        <!-- JOB -->
        <div class="font-raleway text-sm pt-2 pb-3">{{ testi.job }}</div>
    </div>
</template>
