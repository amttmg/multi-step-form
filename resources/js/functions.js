export var getDistricts = (provinceId) => {
    return axios.get('/get-districts/' + provinceId);
}
export var getMunicipalities = (districtId) => {
    return axios.get('/get-municipalities/' + districtId);
}
