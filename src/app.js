import React from "react";
import { useForm } from "react-hook-form";

export default function App() {
  const {
    register,
    handleSubmit,
    formState: { errors },
  } = useForm();
  const onSubmit = (data) => console.log(data);
  console.log(errors);

  return (
    <form onSubmit={handleSubmit(onSubmit)}>
      <input
        type="text"
        placeholder="name"
        {...register("name", { required: true, maxLength: 80 })}
      />
      <input
        type="text"
        placeholder="email address"
        {...register("email address", {
          required: true,
          pattern: /^\S+@\S+$/i,
        })}
      />
      <textarea {...register("message", { required: true, maxLength: 400 })} />

      <input type="submit" />
    </form>
  );
}
