<template>
    <div>
        <Navbar />
        <BlogHeroSection />
        <BlogList :BlogList="BlogList" />
        <RelatedBlogCarousel />
        <TalentGlobally />
        <Footer />
    </div>
</template>

<script >
import Navbar from '../Components/Layouts/Navbar.vue';
import BlogHeroSection from '../Components/BlogHeroSection.vue';
import BlogList from '../Components/BlogList.vue';
import RelatedBlogCarousel from '../Components/RelatedBlogCarousel.vue';
import TalentGlobally from '../Components/TalentGlobally.vue';
import Footer from '../Components/Layouts/Footer.vue';


export default {
    components: {
        Navbar,
        BlogHeroSection,
        BlogList,
        RelatedBlogCarousel,
        TalentGlobally,
        Footer,

    },
    props: {
        BlogList,
    },
    mounted() {
    }
}
</script>
<style scoped>
/* #Footer{
    margin-top: 100px;
} */
</style>
