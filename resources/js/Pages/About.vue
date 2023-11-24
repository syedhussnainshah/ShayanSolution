<template>
    <div>
        <Navbar />
        <AboutProject />
        <TalentGlobally />
        <DigitalAcceleration :TopTier="TopTier" />
        <CustomerExperience />
        <Footer />

    </div>
</template>
<script>
import Navbar from '../Components/Layouts/Navbar.vue';
import AboutProject from '../Components/AboutProject.vue';
import TalentGlobally from '../Components/TalentGlobally.vue';
import DigitalAcceleration from '../Components/DigitalAcceleration.vue';
import CustomerExperience from '../Components/CustomerExperience.vue';

import Footer from '../Components/Layouts/Footer.vue';
export default {
    props: {
        TopTier: Array,
    },
    components: {
        Navbar,
        AboutProject,
        TalentGlobally,
        DigitalAcceleration,
        CustomerExperience,
        Footer
    }
}
</script>
<style>
#TalentGloballyContainerFluid {
    margin-top: 174px;
}
</style>

