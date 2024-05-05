const fetchCountryData = async (countryName) => {
  try {
    const response = await fetch(`https://restcountries.com/v3.1/name/${countryName}`);
    const data = await response.json();    
    console.log(data);
      document.querySelector('.country-flag').innerHTML =`<img src="${data[0].flags.svg}" class="flag-img">`;
      document.querySelector('.country-name').innerHTML = data[0].name.common;
      document.querySelector('.country-city').innerHTML = data[0].capital;
      document.querySelector('.country-coatofarms').innerHTML = `<img src="${data[0].coatOfArms.svg}" class="flag-img">`;
      document.querySelector('.country-languages').innerHTML = data[0].languages.eng;
  } catch (error) {
    console.error('Error fetching country data:', error);
  }
};

fetchCountryData('canada');
