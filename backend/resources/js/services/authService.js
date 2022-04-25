const login = (userData) => {
  return axios.post("/api/auth/login", userData)
}

const user = (accessToken) => {
  return axios.get("/api/auth/user", {
    headers: {
      Authorization: `Bearer ${accessToken}`
    }
  })
}

export default {
  login,
  user,
}