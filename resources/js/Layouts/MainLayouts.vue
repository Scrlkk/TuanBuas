<script setup>
import HeaderContent from "@/Components/HeaderContent.vue";
import FooterContent from '@/Components/FooterContent.vue';
</script>

<template>
    <HeaderContent />
    <slot />
    <FooterContent />
</template>
