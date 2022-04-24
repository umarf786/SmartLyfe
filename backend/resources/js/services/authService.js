const login = (userData) => {
  return axios.post("/api/auth/login", userData)
}

export default {
  login,
}