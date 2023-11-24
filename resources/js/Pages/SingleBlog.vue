<template>
    <Navbar />
    <BlogDetail />
    <RelatedBlogCarousel />
    <TalentGlobally />
    <Footer />
</template>
<script>
import Navbar from '../Components/Layouts/Navbar.vue';
import BlogDetail from '../Components/BlogDetail.vue';
import RelatedBlogCarousel from '../Components/RelatedBlogCarousel.vue';
import TalentGlobally from '../Components/TalentGlobally.vue';
import Footer from '../Components/Layouts/Footer.vue';
export default {
    components: {
        Navbar,
        BlogDetail,
        RelatedBlogCarousel,
        TalentGlobally,
        Footer,
    },

    mounted() {
    }
}
</script>
<style scoped>
#RelatedBlogCarouselContainer {
    margin-top: 132px;
}


</style>
