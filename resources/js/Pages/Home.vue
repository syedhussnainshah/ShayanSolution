
<template>
    <div>
        <Navbar />
        <Header />
        <TopTier :TopTier="TopTier" />
        <ExpertDevelopers />
        <ServicesWeProvide :ServicesWeProvide="ServicesWeProvide" />
        <InnovativeSoftware />
        <SoftwareSolutions :SoftwareSolutions="SoftwareSolutions" />
        <HiringModel :HiringModel="HiringModel" />
        <SuccessStories :SuccessStories="SuccessStories" />
        <TheBestPart />
        <OurTopTier />
        <TalentGlobally />
        <Footer />
    </div>
</template>
<script >
import Navbar from '../Components/Layouts/Navbar.vue';
import Header from '../Components/Header.vue';
import TopTier from '../Components/TopTier.vue';
import ExpertDevelopers from '../Components/ExpertDevelopers.vue';
import ServicesWeProvide from '../Components/ServicesWeProvide.vue';
import InnovativeSoftware from '../Components/InnovativeSoftware.vue';
import SoftwareSolutions from '../Components/SoftwareSolutions.vue';
import HiringModel from '../Components/HiringModel.vue';
import SuccessStories from '../Components/SuccessStories.vue';
import TheBestPart from '../Components/TheBestPart.vue';
import OurTopTier from '../Components/OurTopTier.vue';
import TalentGlobally from '../Components/TalentGlobally.vue';
import Footer from '../Components/Layouts/Footer.vue';

export default {
    components: {
        Navbar,
        Header,
        TopTier,
        ExpertDevelopers,
        ServicesWeProvide,
        InnovativeSoftware,
        SoftwareSolutions,
        HiringModel,
        SuccessStories,
        TheBestPart,
        OurTopTier,
        TalentGlobally,
        Footer,
    },
    props: {
        TopTier,
        ServicesWeProvide,
        SoftwareSolutions,
        HiringModel,
        SuccessStories,
    },
    mounted() {
        console.log(this.ServicesWeProvide);
    }
}
</script>
