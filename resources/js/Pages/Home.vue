<template>
	<Layout title="Home-Inertia">
		<h1>Hello {{ title }}</h1>
		<inertia-link href="/about">About</inertia-link>
	</Layout>
</template>

<style scoped></style>

<script>
	import Layout from '../Shared/Layout.vue'
	export default{
		components: {
			Layout
		},
		props: ['title']
	}
</script>