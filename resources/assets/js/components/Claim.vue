<template>
	<ul id="claims-list" class="list-group">
		<li v-show="loading" class="list-group-item"><i  class="fa fa-spinner fa-spin"></i> Loading data</li>
		<li class="list-group-item" v-for="claim in claims">
			<span class="claim-description">{{ claim.description }}</span>
			<span v-if="claim.status == 'pending'"class="label label-warning pull-right">{{ claim.status }}</span>
			<span v-else-if="claim.status == 'approved'"class="label label-success pull-right">{{ claim.status }}</span>
			<span v-else-if="claim.status == 'rejected'"class="label label-danger pull-right">{{ claim.status }}</span>
		</li>
	</ul>
</template>

<script>
	export default {
		data: function () {
			return {
				loading: false,
				claims: []
			}
		},
		mounted() {
			this.fetchClaims();
		},
		methods: {
			fetchClaims: function () {
				this.loading = true;
				var res = this;
				setTimeout(function () {
					res.loading = false;
					res.claims = [
						{
							description: 'Claim Bulan Disember',
							date: '21-04-1991',
							status: 'rejected'
						},
						{
							description: 'Claim Bulan November',
							date: '21-04-1991',
							status: 'approved'
						}
					]
				}, 500);
			}
		}
	}
</script>