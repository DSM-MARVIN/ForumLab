const users = [
  {
    id: 1,
    name: "Tatiana Pavlova",
    shortName: "Tatiana",
    isUpdate: true,
    image_url:
      "https://images.unsplash.com/photo-1626071466175-79ab723e9fdd?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=759&q=80",
  },
  {
    id: 2,
    name: "Aiony Haust",
    shortName: "Aiony",
    isUpdate: true,
    image_url:
      "https://images.unsplash.com/photo-1534528741775-53994a69daeb?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=764&q=80",
  },
  {
    id: 3,
    name: "Joel Mott",
    shortName: "Joel",
    isUpdate: true,
    image_url:
      "https://images.unsplash.com/photo-1548142813-c348350df52b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=689&q=80",
  },
  {
    id: 4,
    name: "Caique Silva",
    shortName: "Caique",
    isUpdate: false,
    image_url:
      "https://images.unsplash.com/photo-1504363081893-c8226db66926?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80",
  },
  {
    id: 5,
    name: "Jemima Wood",
    shortName: "Jemima",
    isUpdate: false,
    image_url:
      "https://images.unsplash.com/photo-1644456070980-a6be4db8910a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80",
  },
  {
    id: 6,
    name: "Leio McLaren",
    shortName: "Leio",
    isUpdate: false,
    image_url:
      "https://images.unsplash.com/photo-1628157588553-5eeea00af15c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80",
  },
  {
    id: 7,
    name: "Alex Suprun",
    shortName: "Alex",
    isUpdate: false,
    image_url:
      "https://images.unsplash.com/photo-1640951613773-54706e06851d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80",
  },
  {
    id: 8,
    name: "Charles Deluvio",
    shortName: "Charles",
    isUpdate: false,
    image_url:
      "https://images.unsplash.com/photo-1543610892-0b1f7e6d8ac1?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80",
  },
  {
    id: 9,
    name: "Luis Villasmil",
    shortName: "Luis",
    isUpdate: false,
    image_url:
      "https://images.unsplash.com/photo-1624561172888-ac93c696e10c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NDN8fGF2YXRhcnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=600&q=60",
  },
  {
    id: 10,
    name: "Jabari Timothy",
    shortName: "Jabari",
    isUpdate: false,
    image_url:
      "https://images.unsplash.com/photo-1656473040206-53753fbbc767?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80",
  },
  {
    id: 11,
    name: "Ben Parker",
    shortName: "Ben",
    isUpdate: false,
    image_url:
      "https://images.unsplash.com/photo-1531427186611-ecfd6d936c79?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80",
  },
  {
    id: 12,
    name: "Ayo Ogunseinde",
    shortName: "Ayo",
    isUpdate: false,
    image_url:
      "https://images.unsplash.com/photo-1463453091185-61582044d556?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80",
  },
  {
    id: 13,
    name: "Vince Fleming",
    shortName: "Vince",
    isUpdate: false,
    image_url:
      "https://images.unsplash.com/photo-1522556189639-b150ed9c4330?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80",
  },
  {
    id: 14,
    name: "Huston Wilson",
    shortName: "Huston",
    isUpdate: false,
    image_url:
      "https://images.unsplash.com/photo-1507114845806-0347f6150324?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80",
  },
  {
    id: 15,
    name: "Leon Ell'",
    shortName: "Leon",
    isUpdate: false,
    image_url:
      "https://images.unsplash.com/photo-1523824921871-d6f1a15151f1?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80",
  },
];

const storiesContainer = document.querySelector(".stories");
users.map((user) => {
    storiesContainer.innerHTML += `
        <div class="flex flex-col items-center">
            <div class="w-14 h-14 ${user.isUpdate && 'bg-gradient'} rounded-full mb-2">
            <img
                src="${user.image_url}"
                alt="${user.name}"
                class="w-full h-full object-cover rounded-full"
            />
            </div>
            <p class="text-xs text-zinc-500 font-semibold">${user.shortName}</p>
        </div>
`;
});
